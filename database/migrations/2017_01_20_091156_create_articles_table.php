<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
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
            $table->integer('parent_id');
            $table->integer('template_id')->nullable();
            $table->string('menu_title', 255)->nullable();
            $table->string('title', 255)->nullable();
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
            $table->boolean('pub')->nullable()->default(1);
            $table->boolean('top_menu')->nullable()->default(1);

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
        Schema::dropIfExists('articles');
    }
}
