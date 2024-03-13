<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'PostTitle'=>'Como Sonegar Imposto',
            'Author'=>'Pablo Marçal',
            'PublicationDate'=>'2020-12-25',
            'Content'=>'Explicação do método aplicado de Como Sonegar Imposto',
            'Tags'=>'Coach'
        ]);
    }
}
