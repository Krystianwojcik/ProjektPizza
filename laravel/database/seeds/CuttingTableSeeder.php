<?php

use Illuminate\Database\Seeder;

class CuttingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=1, $j=4; $i<=3; $i++, $j+=4)
        DB::table('cutting')->insert([
            'id'=> $i,
            'name'=>$j,
        ]);




    }
}
