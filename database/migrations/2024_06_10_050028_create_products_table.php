<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id');
            $table->tinyInteger('is_publish');
            $table->string('name');
            $table->string('brosure');
            $table->string('photo');
            $table->text('specification')->nullable();
            $table->tinyInteger('is_use_product_specification');
            $table->foreignUuid('product_category_id');
            $table->json('product_specification_id')->nullable();
            $table->timestamps();
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
};
