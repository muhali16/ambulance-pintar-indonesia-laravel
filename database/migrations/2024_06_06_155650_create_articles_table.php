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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id');
            $table->string("slug");
            $table->string("title");
            $table->string("thumbnail");
            $table->string("tags");
            $table->integer("views");
            $table->text('body');
            $table->tinyInteger('is_publish');
            $table->foreignUuid("user_id");
            $table->foreignUuid("category_id");
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
        Schema::dropIfExists('articles');
    }
};
