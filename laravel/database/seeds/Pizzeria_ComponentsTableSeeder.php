<?php

use Illuminate\Database\Seeder;

class Pizzeria_ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        for ($i = 1; $i <=5; $i++)
        {
            for ($j = 1; $j <= 2; $j++)
            {
                DB::table('pizzeria_components')->insert([
                    'pizzeria_id' => $i,
                    'components_id' => $j,
                    'pizzeria_components_quantity'=> $faker->numberBetween(1,20),
                ]);
            }
        }
    }
}
