<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('media_category_id');
            $table->unsignedInteger('model_id');
            $table->string('model_type', 255)->nullable()->default('');
            $table->string('collection_name', 255)->nullable()->default('');
            $table->string('title', 255)->nullable()->default('');
            $table->string('alt', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('file_name', 255)->nullable()->default('');
            $table->string('file_ext', 255)->nullable()->default('');
            $table->string('disk', 255)->nullable()->default('');
            $table->unsignedInteger('size')->nullable();
            $table->text('manipulations')->nullable();
            $table->tinyInteger('pub')->nullable()->default(1);
            $table->unsignedInteger('sort')->nullable();
            $table->nullableTimestamps();

            $table->index(['model_id', 'model_type'], 'media_model_id_model_type_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
