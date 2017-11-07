<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderclothoffactoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderclothoffactorys', function (Blueprint $table) {
            
            $table->string('order_clothid',5);
            $table->string('factory_id',4);
            $table->primary(['order_clothid', 'factory_id']);
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
        Schema::dropIfExists('orderclothoffactorys');
    }
}
