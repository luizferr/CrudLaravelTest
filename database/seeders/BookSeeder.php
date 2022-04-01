<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelbook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Modelbook $book)
    {
        $book->create([
            'title'=>'O mestre dos magos',
            'pages'=>'100',
            'price'=>'10.22',
            'id_user'=>'1'
        ]);

        $book->create([
            'title'=>'A onda',
            'pages'=>'103',
            'price'=>'15.22',
            'id_user'=>'3'
        ]);
    }
}
