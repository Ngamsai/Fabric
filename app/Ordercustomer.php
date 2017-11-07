<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercustomer extends Model
{
    protected $primaryKey = 'OrderID';
    
    function sendToOrderCloth()
    {
        // FIXME 1
        return $this->belongsTo('App\Order_cloth', 'order_clothid');
    }

    
    function sendToOrderCustomer()
    {
        // FIXME 1
        return $this->belongsToMany('App\Customer', 'orderofcustomers','OrderID','customerID' );
    }
    //'OrderID','customerID'
    
    
}