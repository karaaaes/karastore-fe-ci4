<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         // Panggil view navbar
         $navbar = view('templates/navbar');
         // Panggil view navbar
         $footer = view('templates/footer');

         //Get Headline Games
         try {
            // Inisialisasi sesi cURL
            $url = 'http://localhost:8000/games/headline';
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

        //Get Popular Games
        try {
            // Inisialisasi sesi cURL
            $urlPopular = 'http://localhost:8000/games/popular';
            $chPopular = curl_init($urlPopular);

            // Atur opsi permintaan GET
            curl_setopt($chPopular, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($chPopular, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            // Eksekusi permintaan cURL
            $response = curl_exec($chPopular);

            // Periksa apakah permintaan berhasil
            if ($response === false) {
                $error = curl_error($chPopular);
                curl_close($chPopular);
                return false;
            }

            // Tangani respons JSON
            curl_close($chPopular);

            $t['popular_data'] = json_decode($response, true);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            echo "Terjadi kesalahan: " . $e->getMessage();
        }

        //Get Trending Games
        try {
            // Inisialisasi sesi cURL
            $urlTrending = 'http://localhost:8000/games/trending';
            $chTrending = curl_init($urlTrending);

            // Atur opsi permintaan GET
            curl_setopt($chTrending, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($chTrending, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
            ]);

            // Eksekusi permintaan cURL
            $response = curl_exec($chTrending);

            // Periksa apakah permintaan berhasil
            if ($response === false) {
                $error = curl_error($chTrending);
                curl_close($chTrending);
                return false;
            }

            // Tangani respons JSON
            curl_close($chTrending);

            $t['trending_data'] = json_decode($response, true);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            echo "Terjadi kesalahan: " . $e->getMessage();
        }

        $t['status_navbar'] = 'active';
         // Tampilkan view utama dengan menyertakan view navbar dan content
        return view('index', ['navbar' => $navbar, 'footer' => $footer, 't' => $t]);
    }
}