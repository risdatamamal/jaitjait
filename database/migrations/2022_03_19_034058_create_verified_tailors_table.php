<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifiedTailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_tailors', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('tailor_id');
			$table->foreign('tailor_id')->references('id')->on('tailors')->onUpdate('cascade')->onDelete('cascade');
			$table->string('image_url');
			$table->string('video_url');
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
        Schema::dropIfExists('verified_tailors');
    }
}
