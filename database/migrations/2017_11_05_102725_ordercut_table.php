<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercutTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercuts', function (Blueprint $table) {        
            $table->string('orderID',5);
            $table->string('typeCloth',2);
            $table->integer('OrderCutID');          
            $table->string('ColorID');
            $table->string('EmployeeCutID',10);
            $table->integer('total');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('current_complete');
            $table->primary('OrderCutID');
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
        Schema::dropIfExists('ordercuts');
    }
}
