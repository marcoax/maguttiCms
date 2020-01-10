<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_translations', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('slug', 255)->nullable();
            $table->unsignedInteger('news_id');
            $table->string('locale', 255);
            $table->string('title', 255)->nullable()->default('');
            $table->text('description')->nullable();
            $table->text('abstract')->nullable();
            $table->string('subtitle', 255)->nullable();
            $table->string('intro', 255)->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('update_by')->nullable();
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
        Schema::dropIfExists('news_translations');
    }
}
