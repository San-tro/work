<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('organization_id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organization')->onDelete('no action')->onUpdate('no action');
           // $table->bigInteger('doc_pack_id');
            //$table->foreign('doc_pack_id')->references('id')->on('doc_pack')->onDelete('no action')->onUpdate('no action');
            $table->bigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role')->onDelete('no action')->onUpdate('no action');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
