<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercut extends Model
{
    
    
    function recvToOrderCloth()
    {
        // FIXME 1
        return $this->belongsTo('App\Ordercloth');
    }
    
    function ordercutsendtoordewsew()
    {
        return $this->belongsTo('App\Ordersew');
    }
    
    
    
}