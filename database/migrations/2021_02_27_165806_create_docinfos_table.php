<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('docname');
            $table->string('dochosptl');
            $table->string('docbranch');
            $table->string('specialist');
            //$table->string('specialist');;
            $table->string('docdetails');
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
        Schema::dropIfExists('docinfos');
    }
}
