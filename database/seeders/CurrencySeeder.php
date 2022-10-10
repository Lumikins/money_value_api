<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create currencies with their code, name and symbol
        Currency::create(["currency_code" => "ILS", "currency_name" => "Israeli Shekel", "currency_symbol" => "₪"]);
        Currency::create(["currency_code" => "GBP", "currency_name" => "British Pound", "currency_symbol" => "£"]);
        Currency::create(["currency_code" => "INR", "currency_name" => "Indian Rupee", "currency_symbol" => "₹"]);
        Currency::create(["currency_code" => "USD", "currency_name" => "US Dollar", "currency_symbol" => "$"]);
        Currency::create(["currency_code" => "PLN", "currency_name" => "Polish Zloty", "currency_symbol" => "zł"]);
        Currency::create(["currency_code" => "RUB", "currency_name" => "Russian Ruble", "currency_symbol" => "₽"]);
        Currency::create(["currency_code" => "EUR", "currency_name" => "Euro", "currency_symbol" => "€"]);
        Currency::create(["currency_code" => "JPY", "currency_name" => "Yen", "currency_symbol" => "¥"]);
    }
}
