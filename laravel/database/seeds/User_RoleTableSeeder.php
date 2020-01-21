<?php

use Illuminate\Database\Seeder;

class User_RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        for($i=1; $i<=10; $i++)
        {
            DB::table('user_role')->insert([
                'user_id'=>$i,
                'role_id'=>$faker->numberBetween(1,3),
            ]);
        }
    }
}
