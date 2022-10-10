<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pair;
use Illuminate\Http\Request;
use App\Models\Currency;

class PairController extends Controller
{
    // show all currencies
    public function index()
    {
        $pair = Pair::all();
        return response()->json([
            'status' => true,
            'pair'=> $pair,
        ]);
    }

    // create currency pairs
    public function store(Request $request)
    {
        $pair = Pair::create($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'pair'=> $pair
        ],200);
    }

    // modify currencies
    public function update(Request $request, Pair $pair)
    {
        $pair->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'pair'=> $pair
        ], 200);
    }

    // show currency by ID
    public function show($id)
    {
        $pair = Pair::find($id);
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'pair'=> $pair
        ],200);
    }

    // delete currencies
    public function destroy(Pair $pair)
    {
        $pair->delete();
        return response()->json([
            'status' => true,
            'message' => "supprimer"
        ], 200);
    }

    // conversion function
    public function convert($pair_id, $value)
    {
        $exhangeRateAToB = Pair::all()->where("id", $pair_id)->pluck("exchange_rate_a_to_b")->implode('0 => ', );
        $exhangeRateBToA = Pair::all()->where("id", $pair_id)->pluck("exchange_rate_b_to_a")->implode('0 => ', );

        $currency_id_a = Pair::all()->where("id", $pair_id)->pluck("currency_id_a")->implode('0 => ', );
        $currency_id_b = Pair::all()->where("id", $pair_id)->pluck("currency_id_b")->implode('0 => ', );

        $currencyCodeA = Currency::all()->where("id", $currency_id_a)->pluck("currency_code")->implode('0 => ', );
        $currencyCodeB = Currency::all()->where("id", $currency_id_b)->pluck("currency_code")->implode('0 => ', );

        $resultAToB = $exhangeRateAToB * $value;
        $resultBToA = $exhangeRateBToA * $value;

        $count = Pair::all()->where("id", $pair_id)->pluck("count")->implode('0 => ', );
        $product = Pair::find($pair_id);
        $product->update([
                    'count'  => $count+1
                ]);

        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency_code_a' => $currencyCodeA,
            'currency_code_b' => $currencyCodeB,
            'convert_a_to_b' => $resultAToB,
            'convert_b_to_a' => $resultBToA,
            'count'=>$count+1,
            
        ],200);
    }
}
