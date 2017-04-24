<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicePattern extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_pattern', function (Blueprint $table) {
            $table->integer('pattern_id')->unsigned();
            $table->integer('device_id')->unsigned();
            $table->primary(['pattern_id','device_id']);
            $table->foreign('pattern_id')->references('id')->on('paterns');
            $table->foreign('device_id')->references('id')->on('devices');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('device_pattern');
    }
}
