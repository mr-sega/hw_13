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
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
            $table->foreignId('author_id');

            $table->foreign('author_id')->references('id')->on('users');
        });

        Schema::create('boards_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('boards_id');
            $table->foreignId('users_id');

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('boards_id')->references('id')->on('boards');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boards_user', function (Blueprint $table){
            $table->dropForeign('boards_id');
            $table->dropForeign('users_id');
        });

        Schema::dropIfExists('boards_user');

        Schema::dropIfExists('boards');
    }
};
