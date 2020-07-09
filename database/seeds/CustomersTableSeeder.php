<?php

use App\costumers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
              costumers::truncate();

        $faker = \Faker\Factory::create();

        // Crear artículos ficticios en la tabla
                 for ($i = 0; $i < 50; $i++) {
                     costumers::create([
                         'name' => $faker->name,
                         'last_name' => $faker->lastName,
                         'document' => $faker->creditCardNumber,
                         ]);
                 }

    }
}
