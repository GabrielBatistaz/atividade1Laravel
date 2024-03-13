<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'nome' => 'Gabriel Batista',
            'DateOfBirth' => '1985-07-2',
            'Email' => 'gabriel@gmail.com',
            'RegistrationNumber' => '69',
            'ClassCourse' => 'TADS',
        ]);
    }
}
