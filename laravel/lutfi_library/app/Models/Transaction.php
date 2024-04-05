<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function member(){
        return $this->belongsTo('App\Models\Member', 'id');
    }

    public function transactions(){
        return $this->hasOne('App\Models\TransactionsDetail', 'transaction_id');
    }
}
