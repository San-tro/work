<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TendersUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders_users', function (Blueprint $table) {
            $table->bigIncrements('id');

          //  $table->bigInteger('users_id');
          //  $table->bigInteger('tender_id');
           // $table->integer('id',true,true);

            $table->integer('tender_id')->unsigned();
            $table->integer('users_id')->unsigned();
           // $table->primary(array('[tender_id]' , '[users_id]'));
            $table->foreign('users_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('tender_id')->references('id')->on('tender')->onDelete('no action')->onUpdate('no action');


            $table->timestamps();
            //$table->primary(array('tender_id','users_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tenders_users');
    }
}
