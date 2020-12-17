<?php

namespace App\Http\Controllers;

use App\Currency;
use App\CurrencyHistory;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('currency', [
            'currencies' => Currency::paginate(10),
        ]);
    }

    public function show($id)
    {
        return view('show', [
            'currency' => Currency::find($id),
        ]);
    }

    public function history($id)
    {
        $name = Currency::where('id', $id)->value('name');
        $history = CurrencyHistory::where('name', $name)->get();
        return view('history', [
            'histories' => $history
        ]);
    }
}
