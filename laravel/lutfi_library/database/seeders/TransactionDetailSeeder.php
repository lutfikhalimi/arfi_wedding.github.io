<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Validation\ConditionalRules;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $transactiondetail = new TransactionDetail;

            $transactiondetail->transaction_id = Transaction::inRandomOrder()->first()->id;
            $transactiondetail->book_id = Books::inRandomOrder()->first()->id;
            $transactiondetail->qty = rand(1,20);
            

            $transactiondetail->save();

        }
    }
    
}
