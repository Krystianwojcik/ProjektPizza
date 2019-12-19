<?php

use Illuminate\Database\Seeder;

class Pizzeria_Pizza_ComponentsTableSeeder extends Seeder
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
        for ($i = 1; $i <= 5; $i++) {
            
                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => 1,
                ]);
        }
        for ($i = 6; $i <= 10; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => $j,
                ]);
            }
        }
    }
}