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

$components = array( 'Boczek', 'Szynka', 'Salami', 'Ser', 'Pieczarki', 'Papryka', 'Papryka peperoni', 'Ogórek', 'Cebula', 'Pomidor', 'Kukurydza', 'Brokuł', 'Oliwki', 'Ananas');

        foreach($components as $component) {
            
            DB::table('components')->insert([
                'name' => $component,
                'price' => $faker->numberBetween(1,5),
            ]);
        }

        



	




















    }
}