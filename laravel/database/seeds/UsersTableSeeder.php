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
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('user'),
                'role_id'=>1,

            ]);
        DB::table('users')->insert([
                'name'=> 'kucharz',
                'surname'=>'kucharz',
                'email'=>'kucharz@example.com',
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('kucharz'),
                'role_id'=>2,

            ]);
        DB::table('users')->insert([
                'name'=> 'dostawca',
                'surname'=>'dostawca',
                'email'=>'dostawca@example.com',
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('dostawca'),
                'role_id'=>3,

            ]);
        DB::table('users')->insert([
                'name'=> 'admin',
                'surname'=>'admin',
                'email'=>'admin@example.com',
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('admin'),
                'role_id'=>4,

            ]);
        for($i=5;$i<=10;$i++)
        {
            DB::table('users')->insert([
                'name'=> $faker->firstName,
                'surname'=>$faker->lastName,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'password'=> bcrypt('haslo'),
                'role_id'=>1,

            ]);
        }


    }
}
