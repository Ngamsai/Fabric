<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercustomerTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercustomers', function (Blueprint $table) { 
            $table->string('Fname',20);
            $table->string('idcustomer',3);
            $table->string('OrderID',5);
            $table->string('Detail',255);
            $table->integer('Total');
            $table->integer('Price');
            $table->integer('linetotal');
            $table->date('startdate');
            $table->date('dateship');
            $table->string('typeproduct',32);
            $table->string('color_cloth',3);
            $table->string('employeeID_recv',10);
            $table->string('size',10);
            $table->string('Tel',10);    
            $table->primary(['OrderID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordercustomers');
    }
}
