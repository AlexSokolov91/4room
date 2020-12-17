<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyHistory extends Model
{
    protected $fillable = [
        'name', 'rate'
    ];

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
}
