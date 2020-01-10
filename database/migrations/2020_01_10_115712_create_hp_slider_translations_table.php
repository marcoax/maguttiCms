<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHpSliderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hp_slider_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hp_slider_id');
            $table->string('locale', 255);
            $table->string('title', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('created_by');
            $table->integer('update_by');
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
        Schema::dropIfExists('hp_slider_translations');
    }
}
