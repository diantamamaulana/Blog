<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('frompost');
            $table->unsignedInteger('fromuser');
            $table->text('comment');
            $table->foreign('frompost')->references('id')->on('artikels');
            $table->foreign('fromuser')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void,
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
