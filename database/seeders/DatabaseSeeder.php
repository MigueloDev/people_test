<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \App\Models\Product::factory(100)->create();

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Arenera para gato',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Reloj de Oro',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Rotor de alternador',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Radar de juguete',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Asador de juguete',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Utencilio de cocina para rayar',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Kayak',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Arepera',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Oso de peluche',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);

        \App\Models\Product::create([
            'brand' => Arr::random(['nestle', 'evercrisp', 'costa', 'mckay', 'arcor','gourmet', 'maggi', 'ambrosoli']),
            'description' => 'Gomitas de osos',
            'price' => $faker->randomFloat(2,10, 1200)
        ]);


    }
}
