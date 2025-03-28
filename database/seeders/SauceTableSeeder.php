<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SauceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('sauces')->insert([
            [
                'id' => '1',
                'userId' => 'user1@example.com', 
                'name' => 'Sauce 1',
                'manufacturer' => 'Manufacturer 1',
                'description' => 'Description for sauce 1',
                'mainPepper' => 'Pepper 1',
                'imageUrl' => 'http://example.com/image1.jpg',
                'heat' => 5,
                'likes' => 10,
                'dislikes' => 2,
                'usersLiked' => json_encode([]),
                'usersDisliked' => json_encode([]),
            ],
            [
                'id' => '2',
                'userId' => 'user2@example.com',
                'name' => 'Sauce 2',
                'manufacturer' => 'Manufacturer 2',
                'description' => 'Description for sauce 2',
                'mainPepper' => 'Pepper 2',
                'imageUrl' => 'http://example.com/image2.jpg',
                'heat' => 7,
                'likes' => 20,
                'dislikes' => 3,
                'usersLiked' => json_encode([]),
                'usersDisliked' => json_encode([]),
            ],
            [
                'id' => '3',
                'userId' => 'user3@example.com',
                'name' => 'Sauce 3',
                'manufacturer' => 'Manufacturer 3',
                'description' => 'Description for sauce 3',
                'mainPepper' => 'Pepper 3',
                'imageUrl' => 'http://example.com/image3.jpg',
                'heat' => 6,
                'likes' => 15,
                'dislikes' => 5,
                'usersLiked' => json_encode([]),
                'usersDisliked' => json_encode([]),
            ],
            [
                'id' => '4',
                'userId' => 'user4@example.com',
                'name' => 'Sauce 4',
                'manufacturer' => 'Manufacturer 4',
                'description' => 'Description for sauce 4',
                'mainPepper' => 'Pepper 4',
                'imageUrl' => 'http://example.com/image4.jpg',
                'heat' => 4,
                'likes' => 30,
                'dislikes' => 8,
                'usersLiked' => json_encode([]),
                'usersDisliked' => json_encode([]),
            ]
        ]);
    }
}
