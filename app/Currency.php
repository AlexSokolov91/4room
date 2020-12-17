<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
      'name', 'rate'
    ];

    public function histories()
    {
        return $this->hasMany('App\CurrencyHistory', 'name');
    }
}
