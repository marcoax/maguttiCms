<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('block_id');
            $table->string('locale', 255);
            $table->string('title', 255)->nullable();
            $table->string('subtitle', 255)->nullable();
            $table->text('description')->nullable();
            $table->nullableTimestamps();

            $table->unique(['block_id', 'locale'], 'block_translations_block_id_locale_unique');
            $table->index('locale', 'block_translations_locale_index');

            //TODO: $table->foreign('block_id', 'block_translations_block_id_foreign')->references('id')->on('blocks')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_translations');
    }
}
