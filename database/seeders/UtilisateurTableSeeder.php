<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('utilisateurs')->insert([
            [
                'email' => 'user1@example.com',
                'password' => bcrypt('password1'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user2@example.com',
                'password' => bcrypt('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user3@example.com',
                'password' => bcrypt('password3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user4@example.com',
                'password' => bcrypt('password4'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user5@example.com',
                'password' => bcrypt('password5'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user6@example.com',
                'password' => bcrypt('password6'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user7@example.com',
                'password' => bcrypt('password7'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user8@example.com',
                'password' => bcrypt('password8'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user9@example.com',
                'password' => bcrypt('password9'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user10@example.com',
                'password' => bcrypt('password10'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
