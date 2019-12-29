<?php

use Illuminate\Database\Seeder;

class Pizzeria_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        for($i=1; $i<=5; $i++)
        {
            DB::table('pizzeria_user')->insert([
                'pizzeria_id'=>$faker->numberBetween(1,5),
                'user_id'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}