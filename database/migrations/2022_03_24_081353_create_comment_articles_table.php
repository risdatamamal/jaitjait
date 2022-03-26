<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('article_id');
			$table->foreign('article_id')->references('id')->on('articles')->onUpdate('cascade')->onDelete('cascade');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->string('body');
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
        Schema::dropIfExists('comment_articles');
    }
}
