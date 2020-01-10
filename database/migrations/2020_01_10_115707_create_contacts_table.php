<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('request_product_id', 255)->nullable();
            $table->string('subject', 255);
            $table->text('message');
            $table->string('name', 255)->nullable();
            $table->string('surname', 255)->nullable()->default('');
            $table->string('company', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->integer('created_by')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
