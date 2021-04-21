<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHosptlinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosptlinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hosptlname');
            $table->string('hosptlarea');
            //$table->string('branch');
            //$table->string('specialist');;
            $table->string('Details');
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
        Schema::dropIfExists('hosptlinfos');
    }
}
