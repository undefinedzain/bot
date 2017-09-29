<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_menus', function (Blueprint $table) {
            $table->increments('merchant_menu_id');
            $table->integer('merchant_menu_id_merchant');
            $table->integer('merchant_menu_id_type');
            $table->longText('merchant_menu_text');
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
