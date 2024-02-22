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

        Fruit::create(
            [
                'id' => 2,
                'name' => 'Banana',
                'descriptions' => 'Experience the tropical goodness of our golden bananas, sourced directly from the lush landscapes of Ecuador. Creamy and smooth, these bananas are packed with essential nutrients and offer a satisfyingly sweet flavor profile.',
                'price' => 0.99,
                'origin' => 'Ecuador',
                'url' => 'https://cdn.pixabay.com/photo/2017/06/27/22/21/banana-2449019_1280.jpg',
            ],

        );

        Fruit::create(
            [
                'id' => 3,
                'name' => 'Orange',
                'descriptions' => 'Zesty and vibrant, our citrus oranges bring a burst of sunshine to your palate. Grown under the warm Mediterranean sun in Spain, these oranges are packed with vitamin C and offer a refreshing tanginess with every slice.',
                'price' => 2.49,
                'origin' => 'Spain',

                'url' => 'https://cdn.pixabay.com/photo/2016/01/02/02/03/orange-1117645_1280.jpg',
            ],

        );

        Fruit::create(
            [
                'id' => 4,
                'name' => 'Mango',
                'descriptions' => 'Transport yourself to tropical paradise with our succulent mangoes from the sun-drenched orchards of India. Each bite of these luscious fruits is a sensory delight, offering a perfect balance of sweetness and tanginess.',
                'price' => 3.99,
                'origin' => 'India',
                'url' => 'https://cdn.pixabay.com/photo/2016/03/05/22/41/mango-1239347_1280.jpg',
            ],

        );

        Fruit::create(
            [
                'id' => 5,
                'name' => 'Grapes',
                'descriptions' => 'Indulge in the exquisite sweetness of our plump grapes, cultivated in the rolling vineyards of Italy. Bursting with flavor, these grapes are the epitome of luxury, offering a delectable treat for discerning palates.',
                'price' => 4.49,
                'origin' => 'Italy',
                'url' => 'https://cdn.pixabay.com/photo/2021/01/05/05/30/grapes-5889697_1280.jpg',
            ],

        );

        Fruit::create(
            [
                'id' => 6,
                'name' => 'Pineapple',
                'descriptions' => 'Tantalize your taste buds with the tropical allure of our juicy pineapples from the lush landscapes of Costa Rica. With their perfect balance of sweetness and acidity, these pineapples are a true culinary delight.',
                'price' => 2.99,
                'origin' => 'Costa Rica',
                'url' => 'https://cdn.pixabay.com/photo/2023/12/09/21/03/pineapple-8440180_1280.jpg',
            ],

        );


    }
}
