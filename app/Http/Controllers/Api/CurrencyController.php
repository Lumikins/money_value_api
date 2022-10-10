<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Pair;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCurrencyRequest;

class CurrencyController extends Controller
{
    // display currency data
    public function index()
    {
        $currency = Currency::all();
        return response()->json([
            'status' => true,
            'currencies'=> $currency,
        ]);
    }

    public function store(StoreCurrencyRequest $request)
    {
        $currency = Currency::create($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    }
    // display currency data according id
    public function show( $id)
    {
        $currency = Currency::find($id);
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    }

    // modify currencies
    public function update(Request $request, Currency $currency)
    {
        $currency->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    }

    // delete currencies
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return response()->json([
            'status' => true,
            'message' => "supprimer"
        ], 200);
    }
}
