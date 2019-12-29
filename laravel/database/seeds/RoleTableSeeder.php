<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        DB::table('role')->insert([
            'id'=>1,
            'name'=>'User',
        ]);
        DB::table('role')->insert([
            'id'=>2,
            'name'=>'Worker',
        ]);
        DB::table('role')->insert([
            'id'=>3,
            'name'=>'Deliver',
        ]);
    }
}
