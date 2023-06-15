<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $table = 'transactions_games';
    protected $primaryKey = 'id';
    protected $allowedFields = ['transaction_id', 'price', 'full_name', 'email','other_column'];

    public function getTransactionById($transactionId)
    {
        $this->select('transactions_games.transaction_id, transactions_games.price, transactions_games.full_name, transactions_games.email, 
        transactions_games.payment_status, games.game_name');
        $this->join('games', 'transactions_games.game_id = games.id', 'LEFT');
        $this->where('transactions_games.transaction_id', $transactionId);
        $query = $this->get();
        return $query->getRow();
    }
}
