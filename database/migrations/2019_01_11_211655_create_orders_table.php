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
        if ( !Schema::hasTable('orders') ) {
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nickname', 60);
                $table->integer('server_id');
                $table->integer('product_id');

                $table->double('final_price');

                $table->boolean('status');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if ( !Schema::hasTable('orders') ) {
            Schema::drop('orders');
        }
    }
}
