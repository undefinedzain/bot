<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_settings', function (Blueprint $table) {
            $table->increments('merchant_setting_id');
            $table->integer('merchant_setting_id_merchant');
            $table->integer('merchant_setting_id_setting');
            $table->longText('merchant_setting_value');
            $table->dateTime('merchant_setting_created_at');
            $table->dateTime('merchant_setting_updated_at');
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
