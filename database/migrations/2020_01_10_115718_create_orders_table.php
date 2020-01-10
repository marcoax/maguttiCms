<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('cart_id');
            $table->string('products_cost', 255)->default('');
            $table->string('shipping_cost', 255)->default('');
            $table->decimal('discount_amount', 12, 4)->nullable();
            $table->string('vat_cost', 255);
            $table->string('total_cost', 255)->default('');
            $table->integer('billing_address_id');
            $table->integer('shipping_address_id');
            $table->string('discount_code', 20);
            $table->string('token', 32);
            $table->timestamps();

            $table->unique('token', 'order_token_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
