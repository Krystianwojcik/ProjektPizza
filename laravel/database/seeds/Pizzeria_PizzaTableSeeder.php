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
        $faker = Faker\Factory::create('pl_PL');
        $numer = 1;
/*        for ($i = 1; $i <= 5; $i++)
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
        }*/
   
        for ($i = 1; $i <= 5; $i++)
        {
            for ($j = 1; $j <= 10; $j++)
            {
                DB::table('pizzeria_pizza')->insert([
                    'pizzeria_id' => $i,
                    'name' => 'Pizza '.$numer,
                    'price' => $faker->numberBetween(10,20),
                ]);
                $numer++;
            }
        }
    }
}