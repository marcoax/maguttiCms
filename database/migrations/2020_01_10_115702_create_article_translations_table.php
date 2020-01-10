<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id');
            $table->string('locale', 255)->default('');
            $table->string('slug', 255)->nullable();
            $table->string('menu_title', 255)->nullable();
            $table->string('title', 255)->nullable()->default('');
            $table->string('subtitle', 255)->nullable();
            $table->string('intro', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('abstract')->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->string('seo_no_index', 255)->nullable();
            $table->nullableTimestamps();

            $table->unique(['article_id', 'locale'], 'article_translations_article_id_locale_unique');
            $table->index('locale', 'article_translations_locale_index');

            //TODO: $table->foreign(['article_id', 'article_id'], 'article_translations_article_id_foreign')->references(['id', 'id'])->on('articles')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_translations');
    }
}
