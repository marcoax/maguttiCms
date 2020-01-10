<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 255);
            $table->string('value', 255)->nullable()->default('');
            $table->string('description', 255)->nullable()->default('');
            $table->string('domain', 255)->nullable();
            $table->nullableTimestamps();

            $table->unique('key', 'settings_key_unique');
            $table->index('id', 'settings_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
