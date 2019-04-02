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
            $table->integer('server_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('title', 60);
            $table->string('description', 255);
            $table->text('image');

            $table->double('original_price');
            $table->double('discount_price');
            $table->boolean('surcharge');

            $table->string('rcon_cmd', 255);

            $table->boolean('first');
            $table->boolean('highlight');
            $table->boolean('status');
            $table->boolean('description_enable');
            $table->timestamps();
            $table->softDeletes();
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
