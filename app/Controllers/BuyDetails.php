<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Config\Midtrans;
use Midtrans\Config;
use Midtrans\Snap;

class BuyDetails extends BaseController
{
    public function index($param)
    {
        // Panggil view navbar
        $navbar = view('templates/navbar');

        // Panggil view navbar
        $footer = view('templates/footer');

        $randomBytes = random_bytes(6);
        $randomString = bin2hex($randomBytes);

        //Get Details Games
        try {
            // Inisialisasi sesi cURL
            $url = "http://localhost:8000/games/details/$param";
            $ch = curl_init($url);

            // Atur opsi permintaan GET
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            // Eksekusi permintaan cURL
            $response = curl_exec($ch);

            // Periksa apakah permintaan berhasil
            if ($response === false) {
                $error = curl_error($ch);
                curl_close($ch);
                return false;
            }

            // Tangani respons JSON
            curl_close($ch);

            $t['data'] = json_decode($response, true);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            echo "Terjadi kesalahan: " . $e->getMessage();
        }

        $usdAmount = $t['data']['price'];
        $idrAmount = $this->convertUsdToIdr($usdAmount);

        $t['kurs'] = [
            'usdAmount' => $usdAmount,
            'idrAmount' => $idrAmount,
        ];

        // Tampilkan view utama dengan menyertakan view navbar dan content
        return view('buy/buyDetails', ['navbar' => $navbar, 'footer' => $footer, 'randomString' => $randomString, 't'=>$t]);
    }

    public function add($transactionId)
    {
        // Ambil data dari form input
        $gameId = $this->request->getPost('gameId');
        $gameName = $this->request->getPost('gameName');
        $transactionId = $this->request->getPost('trasanctionId');
        $price = intval($this->request->getPost('price'));
        $fullName = $this->request->getPost('fullName');
        $address = $this->request->getPost('address');
        $email = $this->request->getPost('email');
        $phoneNumber = $this->request->getPost('phoneNumber');

        $data = array(
            'transaction_id' => $transactionId,
            'game_id' => (int)$gameId,
            'price' => (int)$price,
            'full_name' => $fullName,
            'address' => $address,
            'email' => $email,
            'phone_number' => $phoneNumber,
            'payment_status' => "pending",
            'created_at' => date("Y-m-d H:i:s")
        );

        // Mengubah data menjadi format JSON
        $jsonData = json_encode($data);

        try {
            // Inisialisasi sesi cURL
            $url = "http://localhost:8000/games/transactions";
            $ch = curl_init($url);

            // Atur opsi permintaan POST
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            // Eksekusi permintaan cURL
            $response = curl_exec($ch);

            // Periksa apakah permintaan berhasil
            if ($response === false) {
                $error = curl_error($ch);
                curl_close($ch);
                return false;
            }

            // Tangani respons JSON
            curl_close($ch);

            $t['data'] = json_decode($response, true);

            // // Baca konten template HTML
            // $template = view('templates/email');

            // // Konfigurasi SMTP
            // $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            // $mail->isSMTP();
            // $mail->Host = 'mail.rakaeshardiansyah.my.id';  // Ganti dengan host SMTP yang digunakan
            // $mail->SMTPAuth = true;
            // $mail->Username = 'kara_gamestore@rakaeshardiansyah.my.id';  // Ganti dengan email pengirim
            // $mail->Password = 'Kambing123@';  // Ganti dengan password email pengirim
            // $mail->SMTPSecure = 'tls';
            // $mail->Port = 587;

            // // Pengaturan email
            // $mail->setFrom('kara_gamestore@yourgame.com', 'Kara Gamestore');  // Ganti dengan email dan nama pengirim
            // $mail->addAddress($email, $fullName);  // Ganti dengan email dan nama penerima
            // $mail->Subject = "Buying Process $gameName";
            // $mail->isHTML(true);

            // // Set konten template HTML ke email
            // $mail->Body = $template;

            // // Kirim email
            // if ($mail->send()) {
            //     $notif = 'Email berhasil dikirim.';
            // } else {
            //     $notif = 'Terjadi kesalahan dalam pengiriman email: ' . $mail->ErrorInfo;
            // }

        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            echo "Terjadi kesalahan: " . $e->getMessage();
        }


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-C04sTanCfIT19VVZdtnZhryz';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $transactionId,
                'gross_amount' => $price,
            ),
            'item_details' => array(
                array(
                    'id' => $gameId,
                    'price' => $price,
                    'quantity' => 1,
                    'name' => $gameName,
                ),
            ),
            'customer_details' => array(
                'first_name' => $fullName,
                'email' => $email,
                'phone' => $phoneNumber,
            ),
        );

        $snapToken = Snap::getSnapToken($params);
        return redirect()->to("https://app.sandbox.midtrans.com/snap/v2/vtweb/$snapToken");
    }

    private function convertUsdToIdr($usdAmount)
    {
        // Kode untuk mendapatkan kurs USD ke IDR dari API atau sumber lainnya
        $usdToIdrRate = 15000;

        $idrAmount = $usdAmount * $usdToIdrRate;

        return $idrAmount;
    }
}
