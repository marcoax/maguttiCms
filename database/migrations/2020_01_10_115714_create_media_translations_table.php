<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('media_id');
            $table->string('locale', 255);
            $table->string('title', 255)->nullable()->default('');
            $table->string('alt', 255)->nullable();
            $table->text('description')->nullable();
            $table->nullableTimestamps();

            $table->unique(['media_id', 'locale'], 'media_translations_media_id_locale_unique');
            $table->index('locale', 'media_translations_locale_index');

            //TODO: $table->foreign('media_id', 'media_translations_media_id_foreign')->references('id')->on('media')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_translations');
    }
}
