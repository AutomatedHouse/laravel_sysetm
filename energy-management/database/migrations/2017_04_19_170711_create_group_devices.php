<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_devices', function (Blueprint $table) {
            $table->increments('id');
           // $table->integer('device_id')->unsigned();
           // $table->integer('group_id')->unsigned();
            //$table->foreign('device_id')->references('id')->on('devices');
           // $table->foreign('group_id')->references('id')->on('groups');
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
        Schema::drop('group_devices');
    }
}
