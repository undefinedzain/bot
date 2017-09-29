<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_channels', function (Blueprint $table) {
            $table->increments('chat_channel_id');
            $table->integer('chat_channel_id_merchant');
            $table->integer('chat_channel_id_customer');
            $table->longText('chat_channel_state');
            $table->dateTime('chat_channel_created_at');
            $table->dateTime('chat_channel_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
