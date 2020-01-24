<?php

use Illuminate\Database\Seeder;

class Order_PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $j=1;
        $faker = Faker\Factory::create('pl_PL');
        for($i=1;$i<=45;$i++)
        {
            DB::table('order_pizza')->insert([
                'id'=>$i,
                'order_id'=>$j,
                'pizzeria_pizza_id'=>$faker->numberBetween(1,50),
                'cutting_id'=>$faker->numberBetween(1,3),
            ]);
            if($i<=10) $j++;
            else if($i%2==0) $j++;

        }

    }
}
