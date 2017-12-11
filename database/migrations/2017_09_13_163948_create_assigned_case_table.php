<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
			$table->string('statement');
			$table->integer('report_crimes_id')->unsigned();
			$table->foreign('report_crimes_id')->references('id')->on('report_crimes');
			$table->integer('statement_id')->unsigned();
			$table->foreign('statement_id')->references('id')->on('statements');
			$table->integer('admin_id')->unsigned();
			$table->foreign('admin_id')->references('id')->on('admins');
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
        Schema::dropIfExists('cases');
    }
}
