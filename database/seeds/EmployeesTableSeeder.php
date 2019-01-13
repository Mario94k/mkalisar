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
        App\Employee::create([
            'employee' => 'Ivan Ivanivic',
            'name' => 'Ivan',
            'last_name' => 'Ivanovic',
            'date_of_birth' => '1992-02-03',
            'sex' => 'Male',
            'city_id' => '1',
        ]);
    }
}
