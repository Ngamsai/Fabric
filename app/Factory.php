<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercloth extends Model
{
    
    protected $primaryKey = 'OrderID';
    
    function orderclothtofactory()
    {
        // FIXME 1
        return $this->belongsToMany('App\Ordercloth','factory_id');
    }
    function factorytoordercut()
    {
        // FIXME 1
        return $this->belongsToMany('App\Ordercut','OrderCutID');
    }
    
    
}