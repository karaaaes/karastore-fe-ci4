<?php

namespace App\Controllers;

class GameDetails extends BaseController
{
    public function index($param)
    {
         // Panggil view navbar
         $navbar = view('templates/navbar');
         // Panggil view navbar
         $footer = view('templates/footer');

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

         // Tampilkan view utama dengan menyertakan view navbar dan content
        return view('details/gameDetails', ['navbar' => $navbar, 'footer' => $footer, 't' => $t]);
    }

}