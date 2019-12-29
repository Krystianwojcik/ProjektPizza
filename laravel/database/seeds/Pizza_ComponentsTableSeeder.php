<?php

use Illuminate\Database\Seeder;

class Pizza_ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        //Dla czytelnosci dodatkowy składnik posiadaja pizze 10-20
        for($i=10;$i<=20;$i++)
        {
            DB::table('pizza_components')->insert([
                'order_pizza_id'=>$i,
                'components_id'=>$faker->numberBetween(1,2),
            ]);
        }
        //pizze 15-17 maja dwa dodatki by sprawdzic poprawnosc
        for($i=15;$i<=17;$i++)
        {
            DB::table('pizza_components')->insert([
                'order_pizza_id'=>$i,
                'components_id'=>$faker->numberBetween(1,2),
            ]);
        }
    }
}
