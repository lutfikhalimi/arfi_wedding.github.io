<?php

namespace Database\Seeders;

use App\Models\Books;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $book = new Books();

            $book->isbn = $faker->randomNumber(9);
            $book->title = $faker->name; // Ubah metode name menjadi sentence
            $book->year = rand(2010, 2021);
            $book->publisher_id = rand(1, 5); // Sesuaikan dengan jumlah penerbit yang Anda miliki
            $book->author_id = rand(1, 10); // Sesuaikan dengan jumlah penulis yang Anda miliki
            $book->catalog_id = rand(1, 4);
            $book->qty = rand(10, 20);
            $book->price = rand(10000, 20000);

            $book->save();
        }
    }
}
