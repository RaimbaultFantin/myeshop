<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintOnDeleteToOrderLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_lines', function (Blueprint $table) {
            $table->dropForeign('order_lines_order_id_foreign');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->dropForeign('order_lines_product_id_foreign');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_lines', function (Blueprint $table) {
            //
        });
    }
}
