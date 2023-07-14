<?php

namespace Database\Seeders;

use App\Models\User as Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'id' => 1,
            'name' => 'João',
            'email' => 'jo@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '12345678901',
            'phone' => '12345678901',
            'created_at' => '2023-10-10 10:10:10',
            'updated_at' => '2023-10-10 10:10:10',
        ]);
        Users::create([
            'id' => 2,
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '12345678902',
            'phone' => '12345678902',
            'created_at' => '2023-10-10 11:11:11',
            'updated_at' => '2023-10-10 11:11:11',
        ]);
        Users::create([
            'id' => 3,
            'name' => 'José',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '12345678903',
            'phone' => '12345678903',
            'created_at' => '2023-10-10 12:12:12',
            'updated_at' => '2023-10-10 12:12:12',
        ]);


    }
}
