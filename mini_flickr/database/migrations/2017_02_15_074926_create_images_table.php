<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('num_views')->unsigned()->default(0);
            $table->integer('num_favourites')->unsigned()->default(0);
            $table->decimal('size', 4, 2)->nullable();
            $table->string('resolution')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index()->default(1);
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
        Schema::dropIfExists('images');
    }
}
