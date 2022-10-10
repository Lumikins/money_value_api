<?php

namespace Database\Seeders;

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
        // call the created seeders
        $this->call(CurrencySeeder::class);
        $this->call(PairSeeder::class);
        $this->call(UserSeeder::class);
    }
}
