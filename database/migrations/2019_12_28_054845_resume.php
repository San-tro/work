<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('birthday');
            $table->string('lastplacework');
            $table->string('vieweducation');
            $table->string('course');
            $table->string('speciality');
            $table->string('institution');
            $table->string('endyear');
            $table->string('telephone');
           // $table->bigInteger('doc_pack_id');
           // $table->foreign('doc_pack_id')->references('id')->on('doc_pack')->onDelete('no action')->onUpdate('no action');
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
        Schema::drop('resume');
    }
}
