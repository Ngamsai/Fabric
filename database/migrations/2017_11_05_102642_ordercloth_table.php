<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderclothTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercloths', function (Blueprint $table) {
            $table->string('namefactory',100);
            $table->string('factory_id',4);
            $table->string('tel_factory',10);
            $table->string('address_factory',255);
            $table->date('startorder');
            $table->float('weight_cloth',5,3);
            $table->string('account_factory',10);
            $table->date('date_tranfer');
            $table->integer('linetotal');
            $table->string('type_cloth',5);
            $table->date('date_recv');
            $table->string('cloth_id',4);
            $table->integer('width_cloth');
            $table->integer('folding');
            $table->integer('unit_folding');
            $table->string('order_clothid',5);
            $table->primary('order_clothid');
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
        Schema::dropIfExists('ordercloths');
    }
}
