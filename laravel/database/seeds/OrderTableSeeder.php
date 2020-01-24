<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
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
            $city = $faker->randomElement($array = array('Legnica', 'Lubin'));
            if ($city == 'Legnica') {
                $zip_code = '59-220';
            } elseif ($city == 'Lubin') {
                $zip_code = '59-300';
            }
            DB::table('order')->insert([
                'id'=>$i,
                'user_id'=> $faker->numberBetween(1,10),
                'status_id'=>$faker->numberBetween(1,6),
                'pizzeria_id'=>$faker->numberBetween(1,5),
                'time' => $faker->dateTimeBetween('-10 days', 'now'),
                /*
                 * TODO
                 */
                'name'=> $faker->firstName,
                'surname'=>$faker->lastName,
                'city'=>$city,
                'street'=>$faker->streetName,
                'numer'=>$faker->numberBetween(1,20),
                'zipcode'=>$zip_code,

            ]);


        }
    }
}
