<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fruit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Fruit::create(
            [
                'id' => 1,
                'name' => 'Apple',
                'descriptions' => 'Crisp and refreshing, our juicy apples are bursting with natural sweetness. Grown in the fertile orchards of the USA, each bite offers a delightful blend of tartness and succulence.',
                'price' => 1.99,
                'origin' => 'USA',
                'url' => 'https://cdn.pixabay.com/photo/2017/09/26/13/21/apples-2788599_1280.jpg',
            ]

            );
    }
}
