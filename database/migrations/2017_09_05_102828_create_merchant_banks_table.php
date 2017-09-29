<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_banks', function (Blueprint $table) {
            $table->increments('merchant_bank_id');
            $table->integer('merchant_bank_id_merchant');
            $table->integer('merchant_bank_id_bank');
            $table->string('merchant_bank_owner',64);
            $table->string('merchant_bank_number',32);
            $table->dateTime('merchant_bank_created_at');
            $table->dateTime('merchant_bank_updated_at');
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
