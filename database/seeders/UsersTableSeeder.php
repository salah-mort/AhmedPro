<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        public function run()
{
    User::create([
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'password' => bcrypt('password'),
    ]);

    User::create([
        'name' => 'Jane Smith',
        'email' => 'janesmith@example.com',
        'password' => bcrypt('password'),
    ]);

    // حط  مستخدمين هان على قد الحاجة
}

    }
}
