<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee', 'name', 'last_name', 'date_of_birth', 'sex', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }
    public function salaries()
    {
        return $this->hasMany(\App\Salary::class);
    }
}

