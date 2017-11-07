<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercloth extends Model
{
    
    protected $primaryKey = 'OrderID';
    
    function recvFromOrderCus()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercustomer','OrderID');
    }
    function sendToOrderCut()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercut','OrderID');
    }
    function orderclothsendtofactory(){
        
        return $this->belongsToMany('App\Factory');
    }
    
}