<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    use HasFactory;
    protected $fillable = ["currency_id_a", "currency_id_b", "exchange_rate_a_to_b", "exchange_rate_b_to_a", "count"];

    public function currencies()
    {
        return $this->belongsTo(Currency::class);
    }
}
