<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medname');
            $table->string('othername');
            $table->string('treatment');
            $table->string('sideeffects');
            $table->string('notfor');
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
        Schema::dropIfExists('medinfos');
    }
}
