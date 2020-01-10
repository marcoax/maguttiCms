<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain', 255);
            $table->integer('parent_id')->nullable();
            $table->string('menu_title', 255)->nullable();
            $table->string('title', 255)->nullable()->default('');
            $table->string('subtitle', 255)->nullable();
            $table->string('intro', 255)->nullable();
            $table->string('abstract', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('doc', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('banner', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->integer('sort')->nullable();
            $table->tinyInteger('pub')->nullable()->default(1);
            $table->integer('ignore_slug_translation')->nullable()->default(0);
            $table->tinyInteger('top_menu')->nullable()->default(1);
            $table->integer('template_id')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
