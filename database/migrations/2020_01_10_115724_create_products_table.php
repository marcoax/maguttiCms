<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 255);
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title', 255)->nullable()->default('');
            $table->string('subtitle', 255)->nullable()->default('');
            $table->text('description')->nullable();
            $table->string('slug', 255)->nullable();
            $table->float('price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('doc', 255)->nullable();
            $table->string('video', 255)->nullable()->default('');
            $table->integer('sort')->nullable();
            $table->tinyInteger('pub')->nullable()->default(1);
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->integer('created_by')->nullable();
            $table->nullableTimestamps();

            $table->unique('code', 'products_code_unique');
            $table->unique('slug', 'products_slug_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
