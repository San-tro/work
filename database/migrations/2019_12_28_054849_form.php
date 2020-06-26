<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Form extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('address');
            $table->string('maritalstatus');
            //$table->bigInteger('doc_pack_id');
            //$table->bigInteger('organization_id');
            //$table->foreign('doc_pack_id')->references('id')->on('doc_pack')->onDelete('no action')->onUpdate('no action');
            //$table->foreign('organization_id')->references('id')->on('organization')->onDelete('no action')->onUpdate('no action');
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
        Schema::drop('form');
    }
}
