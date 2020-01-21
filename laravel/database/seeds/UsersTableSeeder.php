<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('pl_PL');
        

        DB::table('users')->insert([
            'name'=> 'user',
            'surname'=>'user',
            'email'=>'user@example.com',
            'phone'=>'123123123',
            'password'=> bcrypt('user'),
            'role'=> '1',
        ]);
        
        for($i=1;$i<=10;$i++)
        {
            DB::table('users')->insert([
                'name'=> $faker->firstName,
                'surname'=>$faker->lastName,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('haslo'),
                'role'=> '1',

            ]);
        }


    }
}
