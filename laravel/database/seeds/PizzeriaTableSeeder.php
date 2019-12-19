<?php

use Illuminate\Database\Seeder;

class PizzeriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Lecture 10 */
        $faker = Faker\Factory::create('pl_PL');

        /* Lecture 10 */
        for ($i = 1; $i <= 5; $i++)
        {
            $name = $faker->unique()->word;
            $city = $faker->randomElement($array = array('Legnica', 'Lubin'));
            if ($city == 'Legnica') {
                $zip_code = '59-220';
            } elseif ($city == 'Lubin') {
                $zip_code = '59-300';
            }
            DB::table('pizzeria')->insert([
                'name' => $name,
                'street' => $faker->streetName,
                'number' => $faker->numberBetween(1,10),
                'city' => $city,
                'zipcode' => $zip_code,
                'phone' => $faker->phoneNumber,
                'city_slug' => Str::slug($city, '-'),
                'name_slug' => Str::slug($name, '-'),
            ]);
        }
    }
}