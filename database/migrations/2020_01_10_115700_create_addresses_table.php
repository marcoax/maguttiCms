<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('street', 100)->default('');
            $table->string('number', 5)->nullable()->default('');
            $table->string('zip_code', 10);
            $table->string('city', 50)->default('');
            $table->string('province', 50)->default('');
            $table->integer('country_id');
            $table->string('phone', 30)->nullable()->default('');
            $table->string('mobile', 30)->nullable()->default('');
            $table->string('email', 50)->nullable()->default('');
            $table->string('vat', 50)->nullable()->default('');
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
        Schema::dropIfExists('addresses');
    }
}
