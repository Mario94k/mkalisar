<?php

use Illuminate\Database\Seeder;

class SalariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Salary::create([
            'salary_date' => '2018-03-01',
            'gross_salary' => '10540',
            'net_salary' => '7200',
            'tax' => '270',
            'surtax' => '25',
            'health_insurance' => '250',
            'pension' => '120',
            'employee_id' => '1'
        ]);
    }
}
