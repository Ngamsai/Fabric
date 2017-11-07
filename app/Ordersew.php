<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercut extends Model
{
    
    
    function ordercuttoordersew()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercut','OrderID');
    }
    
}