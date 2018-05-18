<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');

            $table->integer('hood_id')->unsigned();
            $table->foreign('hood_id')->references('id')->on('hoods');

            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');

            $table->integer('reply_id')->nullable()->unsigned();
            $table->foreign('reply_id')->references('id')->on('messages')->onDelete('set null');
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
        Schema::dropIfExists('conversations');
    }
}
