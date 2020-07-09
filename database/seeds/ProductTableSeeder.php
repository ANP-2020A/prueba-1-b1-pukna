<?php

use App\products;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        products::truncate();

        $faker = \Faker\Factory::create();

        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            products::create([
                'name' => $faker->name,
                'code' => $faker->currencyCode,
                'price'=> $faker->numberBetween(),


                ]);
        }
    }
}
