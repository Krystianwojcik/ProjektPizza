<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $faker = Faker\Factory::create('pl_PL');



            DB::table('components')->insert([
                'name' => 'Ser',
                'price' => '2',
            ]);
            DB::table('components')->insert([
                'name' => 'Szynka',
                'price' => '3',
            ]);

    }
}