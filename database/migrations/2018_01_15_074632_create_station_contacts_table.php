<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('station_contacts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('admin_id')->unsigned();
          $table->foreign('admin_id')->references('id')->on('admins');
          $table->string('phonenumber');
          $table->string('address');
          $table->string('OCS');
          $table->string('OCPD');
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
        Schema::dropIfExists('station_contacts');
    }
}
