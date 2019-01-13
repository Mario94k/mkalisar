<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = ['continent_id', 'county_name', 'county_code'];
    
    public function cities()
    {
        return $this->hasMany(\App\City::class);
    }
    public function employees()
    {
        return $this->hasMany(\App\Employee::class);
    }

    public function continent()
    {
        return $this->belongsTo(\App\Continent::class);
    }
    /*public function destroy($id)
    {
        \App\City::destroy($id);
        return redirect()->action('CityController@index');
    }   */
}
