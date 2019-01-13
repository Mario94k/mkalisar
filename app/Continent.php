<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['continents_name', 'number_of_counties', 'native_name'];

    public function county()
    {
        return $this->hasMany(\App\County::class);
    }
}
