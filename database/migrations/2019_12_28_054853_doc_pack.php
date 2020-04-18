<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocPack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_pack', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('form_id');
            //$table->bigInteger('users_id');
            $table->bigInteger('psy_test_id');
            $table->bigInteger('resume_id');
            $table->foreign('form_id')->references('id')->on('form')->onDelete('no action')->onUpdate('no action');
            //$table->foreign('users_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('psy_test_id')->references('id')->on('psy_test')->onDelete('no action')->onUpdate('no action');
            $table->foreign('resume_id')->references('id')->on('resume')->onDelete('no action')->onUpdate('no action');
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
        Schema::drop('doc_pack');
    }
}
