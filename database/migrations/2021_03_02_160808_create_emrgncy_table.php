<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmrgncyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emrgncy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('division');
            $table->string('area');
            $table->string('police');
            $table->string('ambulance');
            $table->string('fireservice');;
            $table->string('hosptl');
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
        Schema::dropIfExists('emrgncy');
    }
}
