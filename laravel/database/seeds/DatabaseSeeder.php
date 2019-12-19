<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PizzeriaTableSeeder::class);
         $this->call(Pizzeria_PizzaTableSeeder::class);
         $this->call(ComponentsTableSeeder::class);
         $this->call(Pizzeria_Pizza_ComponentsTableSeeder::class);
    }
}
