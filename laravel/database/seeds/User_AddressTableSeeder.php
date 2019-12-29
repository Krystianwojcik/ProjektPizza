<?php

use Illuminate\Database\Seeder;

class User_AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        for ($i = 1; $i <= 10; $i++)
        {
            $city = $faker->randomElement($array = array('Legnica', 'Lubin'));
            if ($city == 'Legnica') {
                $zip_code = '59-220';
            } elseif ($city == 'Lubin') {
                $zip_code = '59-300';
            }


            DB::table('user_address')->insert([
                'id'=>$i,
                'user_id'=>$i,
                'city'=>$city,
                'street'=>$faker->streetName,
                'zipcode'=>$zip_code,

            ]);

        }
    }
}
