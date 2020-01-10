<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 255)->nullable()->default('');
            $table->unsignedInteger('category_id');
            $table->string('locale', 255);
            $table->string('title', 255)->nullable()->default('');
            $table->text('description')->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('update_by')->nullable();
            $table->nullableTimestamps();

            $table->unique(['category_id', 'locale'], 'categories_translations_category_id_locale_unique');
            $table->index('locale', 'categories_translations_locale_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_translations');
    }
}
