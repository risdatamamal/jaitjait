<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTailorReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailor_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('tailor_id');
			$table->foreign('tailor_id')->references('id')->on('tailors')->onUpdate('cascade')->onDelete('cascade');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->text('comment');
			$table->string('iamge_url')->nullable();
			$table->float('rating')->default(0.0);
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
        Schema::dropIfExists('tailor_reviews');
    }
}
