<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'employeeID';  
    
    function employee_work_on()
    {
        // FIXME 1
        return $this->belongsTo('App\Department');
    }
    function be_manager()
    {
        // FIXME 1
        return $this->belongsTo('App\Department');
    }
}