<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLattitudeLatitudesToContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('station_contacts', function($table) {
       $table->decimal('longitude', 21, 15);
       $table->decimal('latitude', 21, 15);
 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('station_contacts', function($table) {
        $table->decimal('longitude', 21, 15);
        $table->decimal('latitude', 21, 15);
 });
    }
}
