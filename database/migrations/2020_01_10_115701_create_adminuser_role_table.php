<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminuserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminuser_role', function (Blueprint $table) {
            $table->unsignedInteger('adminuser_id');
            $table->unsignedInteger('role_id');

            $table->primary(['adminuser_id', 'role_id']);

            //TODO: $table->foreign('adminuser_id', 'adminuser_role_adminuser_id_foreign')->references('id')->on('adminusers')->onDelete('CASCADE')->onUpdate('CASCADE');
            //TODO: $table->foreign('role_id', 'adminuser_role_role_id_foreign')->references('id')->on('roles')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminuser_role');
    }
}
