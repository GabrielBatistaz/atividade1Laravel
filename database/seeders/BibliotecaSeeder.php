<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title'=>'Show do Milhão',
            'AutorPublisher'=>'Matheus Souto',
            'PublicationDate'=>'2024-03-12',
            'GernreType'=>'Comédia',
            'AvailableCopies'=>'250000'
        ]);
    }
}
