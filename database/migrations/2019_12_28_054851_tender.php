<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('vacancy')->nullable(true);
            $table->string('view');
            $table->string('personincharge');
            $table->string('comment')->nullable(true);
            //$table->bigInteger('tenders_users_id');
            $table->bigInteger('vacancy_id');
           // $table->foreign('tenders_users_id')->references('id')->on('tenders_users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('vacancy_id')->references('id')->on('vacancy')->onDelete('no action')->onUpdate('no action');
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
        Schema::drop('tender');
    }
}
