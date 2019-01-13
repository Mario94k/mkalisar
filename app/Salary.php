<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['salary_date', 'gross_salary', 'net_salary', 'tax', 'surtax', 'health_insurance', 'pension', 'employee_id','employee'];

    public function employee()
    {
        return $this->belongsTo(\App\Employee::class);
    }
}

