<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialityTailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_tailors', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('tailor_id');
			$table->foreign('tailor_id')->references('id')->on('tailors')->onUpdate('cascade')->onDelete('cascade');
			$table->unsignedBigInteger('speciality_id');
			$table->foreign('speciality_id')->references('id')->on('specialities')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('speciality_tailors');
    }
}
