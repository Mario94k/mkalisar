<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'continent_name' => 'Europe',
            'number_of_counties' => '5000',
            'native_name' => 'jkhk'
        ]);
    }
}
