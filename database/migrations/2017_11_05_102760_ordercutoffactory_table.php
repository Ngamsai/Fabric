<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercutoffactoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercutoffactorys', function (Blueprint $table) {
            
            $table->string('OrderCutID',5);
            $table->string('factory_id',4);
            $table->primary(['OrderCutID', 'factory_id']);
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
        Schema::dropIfExists('ordercutoffactorys');
    }
}
