<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_messages', function (Blueprint $table) {
            $table->increments('merchant_message_id');
            $table->integer('merchant_message_id_merchant');
            $table->integer('merchant_message_id_type');
            $table->longText('merchant_message_text');
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
