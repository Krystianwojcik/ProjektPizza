<?php

use Illuminate\Database\Seeder;

class Order_StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        DB::table('order_status')->insert([
            'id'=>1,
            'name'=>'Przyjęto do realizacji',
        ]);
        DB::table('order_status')->insert([
            'id'=>2,
            'name'=>'W trakcie produkcji',
        ]);
        DB::table('order_status')->insert([
            'id'=>3,
            'name'=>'W drodze',
        ]);
        DB::table('order_status')->insert([
            'id'=>4,
            'name'=>'Zrealizowano',
        ]);
        DB::table('order_status')->insert([
            'id'=>5,
            'name'=>'Anulowano',
        ]);
    }
}
