<?php

namespace App\Http\Controllers;

use App\Currency;

use App\CurrencyHistory;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index()
    {
       $result = Currency::all();
       return response()->json($result, 200);

    }

    public function show($id)
    {
        return response()->json(Currency::find($id), 200);
    }

    public function history($id)
    {
        $name = Currency::where('id', $id)->value('name');
        $history = CurrencyHistory::where('name', $name)->get();
        return response()->json($history, 200);
    }
}
