<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('merchant_id');
            $table->string('merchant_username',24);
            $table->string('merchant_password',64);
            $table->integer('merchant_is_login');
            $table->integer('merchant_level');
            $table->dateTime('merchant_active_to');
            $table->dateTime('merchant_created_at');
            $table->dateTime('merchant_updated_at');
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
