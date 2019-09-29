<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('post_titlle')->nullable();

            $table->longText('post_description');

            $table->string('post_image')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
