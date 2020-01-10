<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('locale', 255);
            $table->string('slug', 255)->nullable();
            $table->string('title', 255)->nullable()->default('');
            $table->string('subtitle', 255)->nullable()->default('');
            $table->text('description')->nullable();
            $table->string('doc', 255)->nullable();
            $table->string('permalink', 255)->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->tinyInteger('seo_no_index')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('update_by')->nullable();
            $table->nullableTimestamps();

            $table->unique(['product_id', 'locale'], 'products_translations_product_id_locale_unique');
            $table->index('locale', 'products_translations_locale_index');

            //TODO: $table->foreign('product_id', 'products_translations_product_id_foreign')->references('id')->on('products')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translations');
    }
}
