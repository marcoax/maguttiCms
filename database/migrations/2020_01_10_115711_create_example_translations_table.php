<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('example_id');
            $table->string('slug', 255)->nullable();
            $table->string('locale', 255);
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('description_2')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('image_media_id')->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->tinyInteger('seo_no_index')->nullable();
            $table->nullableTimestamps();

            $table->unique(['example_id', 'locale'], 'examples_translations_example_id_locale_unique');
            $table->index('locale', 'examples_translations_locale_index');

            //TODO: $table->foreign('example_id', 'examples_translations_example_id_foreign')->references('id')->on('examples')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example_translations');
    }
}
