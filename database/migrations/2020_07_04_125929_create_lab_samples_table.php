<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabSamplesTable extends Migration
{
    
    public function up()
    {
        Schema::create('lab_samples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->string('city');
            $table->text('observations');
            $table->enum('status',['extraction', 'pcr', 'analises', 'report']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('lab_samples');
    }
}
