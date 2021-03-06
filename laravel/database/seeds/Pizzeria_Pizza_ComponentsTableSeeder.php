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
        /*
         * TODO
         */
        /* Lecture 10 */
        $faker = Faker\Factory::create('pl_PL');

        /* Lecture 10 */
/*        for ($i = 1; $i <= 5; $i++) {

                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => 4,
                ]);
        }*/
        for ($i = 1; $i <= 50; $i++) {
                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => $faker->unique(true)->numberBetween(1,14),
                ]);
                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => $faker->unique(true)->numberBetween(1,14),
                ]);
                DB::table('pizzeria_pizza_components')->insert([
                    'pizzeria_pizza_id' => $i,
                    'components_id' => $faker->unique(true)->numberBetween(1,14),
                ]);
        }
    }
}
