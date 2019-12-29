<?php

use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        for ($i = 1; $i <= 30; $i++)
        {
            DB::table('rating')->insert([
                'id'=>$i,
                'order_id'=>$faker->numberBetween(1,30),
                'value'=>$faker->numberBetween(1,10),
                'description'=>$faker->text(500),
            ]);
        }



    }
}


