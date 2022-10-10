<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pair;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create the exchange rate, currently with random rates
        Pair::create(["currency_id_a" => 1, "currency_id_b" => 8, "exchange_rate_a_to_b" => 2, "exchange_rate_b_to_a" => 1.4]);
        Pair::create(["currency_id_a" => 2, "currency_id_b" => 7, "exchange_rate_a_to_b" => 4.2, "exchange_rate_b_to_a" => 2.6]);
        Pair::create(["currency_id_a" => 3, "currency_id_b" => 6, "exchange_rate_a_to_b" => 1.8, "exchange_rate_b_to_a" => 1.1]);
        Pair::create(["currency_id_a" => 4, "currency_id_b" => 5, "exchange_rate_a_to_b" => 3, "exchange_rate_b_to_a" => 3.5]);
    }
}
