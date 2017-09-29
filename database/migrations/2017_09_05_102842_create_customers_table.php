<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->integer('customer_id_sosmed');
            $table->longText('customer_name');
            $table->longText('customer_email');
            $table->string('customer_phone',24);
            $table->longText('customer_image');
            $table->string('customer_pid');
            $table->dateTime('customer_created_at');
            $table->dateTime('customer_updated_at');
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
