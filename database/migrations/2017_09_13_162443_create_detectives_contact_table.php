<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetectivesContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
			 $table->string('Fname');
			  $table->string('lname');
			  $table->string('phone');
			  $table->string('email');
			  $table->string('rank');
			  $table->integer('admin_id')->unsigned();
			  $table->foreign('admin_id')->references('id')->on('admins');
			  $table->integer('type_id')->unsigned();
			  $table->foreign('type_id')->references('id')->on('type');
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
        Schema::dropIfExists('contacts');
    }
}

