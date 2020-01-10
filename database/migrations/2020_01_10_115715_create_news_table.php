<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('domain', 255);
            $table->date('date');
            $table->string('title', 255);
            $table->text('description');
            $table->string('slug', 255)->nullable();
            $table->string('doc', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->integer('sort')->nullable();
            $table->tinyInteger('pub')->nullable()->default(1);
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
        Schema::dropIfExists('news');
    }
}
