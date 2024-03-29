<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name'             =>Crypt::encryptString('Alexandre Santos'),
            'email'            =>Crypt::encryptString('alexandre@email.com'),
            'telefone'         =>Crypt::encryptString('(00) 9999-9999'),
            'data_nascimento'  =>Crypt::encryptString('1980-10-25'),
        ]);

        DB::table('contacts')->insert([
            'name'             =>Crypt::encryptString('Michel Silva'),
            'email'            =>Crypt::encryptString('michels@email.com'),
            'telefone'         =>Crypt::encryptString('(00) 5456-9999'),
            'data_nascimento'  =>Crypt::encryptString('2000-07-04'),
        ]);
    }
}
