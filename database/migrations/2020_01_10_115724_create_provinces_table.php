<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->string('title', 255);
            $table->string('slug', 256)->nullable()->default('');
            $table->integer('sort')->nullable();
            $table->string('code', 32)->nullable()->default('');
            $table->string('lat', 16)->nullable()->default('');
            $table->string('lng', 16)->nullable()->default('');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

            $table->index('state_id', 'id_region');
            $table->index('country_id', 'id_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
