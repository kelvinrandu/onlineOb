<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('report_crimes', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('user_id')->unsigned();
         $table->foreign('user_id')->references('id')->on('users');
         $table->integer('admin_id')->unsigned();
         $table->foreign('admin_id')->references('id')->on('admins');
         $table->date('date');
         $table->integer('type_id')->unsigned();
		 $table->foreign('type_id')->references('id')->on('type');
         $table->string('status')->nullable();
         $table->longText('crime_description');
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
          Schema::dropIfExists('report_crimes');
    }
}
