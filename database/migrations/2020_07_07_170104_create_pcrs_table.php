<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrs', function (Blueprint $table) {
            $table->id();
            $table->enum('thermocycler',['1','2']);
            $table->float('N1');
            $table->float('N2');
            $table->float('RP');
            $table->unsignedBigInteger('labSample_id');
            $table->foreign('labSample_id')->references('id')->on('lab_samples');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcrs');
    }
}
