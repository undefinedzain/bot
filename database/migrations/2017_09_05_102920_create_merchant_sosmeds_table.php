<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantSosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_sosmeds', function (Blueprint $table) {
            $table->increments('merchant_sosmed_id');
            $table->integer('merchant_sosmed_id_merchant');
            $table->integer('merchant_sosmed_id_sosmed');
            $table->longText('merchant_sosmed_email');
            $table->longText('merchant_sosmed_pid');
            $table->dateTime('merchant_sosmed_created_at');
            $table->dateTime('merchant_sosmed_updated_at');
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
