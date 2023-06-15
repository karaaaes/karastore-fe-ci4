<?php

namespace App\Controllers;
use App\Models\TransactionsModel;


class CheckTransactions extends BaseController
{
    public function index()
    {
         // Panggil view navbar
         $navbar = view('templates/navbar');
         // Panggil view navbar
         $footer = view('templates/footer');

         // Tampilkan view utama dengan menyertakan view navbar dan content
        return view('check_transactions/transactions', ['navbar' => $navbar, 'footer' => $footer]);
    }

    public function checkTransactionsCode()
    {
        // Ambil data transaction_id dari POST request
        $transactionId = $this->request->getPost('transaction_id');
    
        // Buat objek model untuk mengakses tabel transactions_games
        $transactionsModel = new TransactionsModel();
    
        // Cek apakah ID transaksi ada dalam database
        $transaction = $transactionsModel->getTransactionById($transactionId);
    
        if ($transaction) {
            // ID transaksi ada dalam database
            return $this->response->setJSON([
                'status' => 'exist',
                'transaction' => $transaction
            ]);
        } else {
            // ID transaksi tidak ada dalam database
            return $this->response->setJSON([
                'status' => 'not_exist'
            ]);
        }
    }
    
}