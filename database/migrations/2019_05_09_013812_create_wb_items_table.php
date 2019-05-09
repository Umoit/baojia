<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wb_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wb_id');
            $table->string('time');
            $table->string('country');
            $table->string('city');
            $table->string('qofp');
            $table->string('notice');
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
        Schema::dropIfExists('wb_items');
    }
}
