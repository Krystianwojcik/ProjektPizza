<?php

use Illuminate\Database\Seeder;

class Pizzeria_PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Lecture 10 */
        $faker = Faker\Factory::create('pl_PL');

        /* Lecture 10 */
        for ($i = 1; $i <= 5; $i++)
        {
            DB::table('pizzeria_pizza')->insert([
                'pizzeria_id' => $i,
                'name' => 'Margarita',
                'price' => $faker->numberBetween(10,20),
            ]);
        }
        for ($i = 1; $i <= 5; $i++)
        {
            DB::table('pizzeria_pizza')->insert([
                'pizzeria_id' => $i,
                'name' => 'Margarita z szyną',
                'price' => $faker->numberBetween(10,20),
            ]);
        }
    }
}