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
         $this->call(CountiesTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
         $this->call(SalariesTableSeeder::class);
         $this->call(ContinentsTableSeeder::class);
         
    }
}
