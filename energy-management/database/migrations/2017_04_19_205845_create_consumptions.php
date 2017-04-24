<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumptions', function (Blueprint $table) {

            $table->timestamp('consumption_hour');
            $table->integer('device_id')->unsigned();
            $table->double('consumption_amount');
            $table->double('consumption_cost');
            $table->primary('consumption_hour');
            $table->foreign('device_id')->references('id')->on('devices');


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('=consumptions');
    }
}
