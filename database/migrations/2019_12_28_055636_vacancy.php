<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vacancy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direction');
            $table->string('vacancystatus');
            $table->string('contactperson');
            $table->string('manager');
            $table->string('datestart');
            $table->string('dateend');
            $table->string('wayofeployment');
            $table->bigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organization')->onDelete('no action')->onUpdate('no action');
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
        Schema::drop('vacancy');
    }
}
