<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@test.com',
            'department' => 'IT',
        ]);
    }
}
