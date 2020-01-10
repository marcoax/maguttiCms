<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->nullable();
            $table->string('color', 7)->nullable();
            $table->date('date')->nullable();
            $table->integer('article_2_id')->nullable();
            $table->integer('article_3_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('description_2', 255)->nullable();
            $table->string('slug', 100)->nullable();
            $table->string('doc', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('image_crop', 255)->nullable();
            $table->smallInteger('image_media_id')->nullable();
            $table->smallInteger('status_id')->nullable();
            $table->smallInteger('sort')->nullable();
            $table->tinyInteger('pub')->nullable()->default(1);
            $table->nullableTimestamps();

            $table->unique('slug', 'examples_slug_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examples');
    }
}
