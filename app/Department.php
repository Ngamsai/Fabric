<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   
    protected $primaryKey = 'departmentID';  
    public $incrementing = false;
    function work_on()
    {
        // FIXME 1
        return $this->hasMany('App\Employee','employeeID');
    }
    function manager()
    {
        // FIXME 1
        return $this->hasOne('App\Employee','employeeID','supervisor');
    }
}