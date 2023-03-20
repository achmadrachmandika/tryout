<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'brian',
            'username' => 'Siswa1',
            'password' => bcrypt('123'),
            'email' => 'devanoabe@gmail.com',
            'telepon' => '08522299',
            'level' => 'siswa'
        ]);
    }
}