<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function transactions_details(){
        return $this->hasMany('App\Models\Transactions_Details', 'member_id');
    }
}
