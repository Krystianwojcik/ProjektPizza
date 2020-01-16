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
         $this->call(CuttingTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Order_StatusTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(User_AddressTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(Pizzeria_UserTableSeeder::class);
        $this->call(User_RoleTableSeeder::class);
        $this->call(Pizzeria_ComponentsTableSeeder::class);
        $this->call(Order_PizzaTableSeeder::class);
        $this->call(Pizza_ComponentsTableSeeder::class);

    }
}
