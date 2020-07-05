<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id('id');
            $table->string('email');
            $table->date('sample_date');
            $table->string('gal_requisition');
            $table->string('name');
            $table->integer('age');
            $table->char('sex',1);
            $table->date('birth_date');
            $table->string('city');
            $table->string('residential_city');
            $table->enum('beginning_symptom_date',['ate_3','4_a_6','7_a_9','10+','assintomatico']);
            $table->date('collection_sample_date');
            $table->enum('patient_status',['liberado','hospitalizado','obito']);
            $table->enum('collect_method',['swab_nasofaringe','swab_orofaringe','lavado_bronmcoalveolar','saliva','aspirado_traqueal','post_mortem']);
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
        Schema::dropIfExists('samples');
    }
}
