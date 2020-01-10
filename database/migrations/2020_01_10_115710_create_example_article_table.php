<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_article', function (Blueprint $table) {
            $table->unsignedInteger('example_id');
            $table->unsignedInteger('article_id');
            $table->nullableTimestamps();

            $table->index('example_id', 'example_article_example_id_index');
            $table->index('article_id', 'example_article_article_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example_article');
    }
}
