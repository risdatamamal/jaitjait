<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('district_id');
            $table->foreignId('role_id');
            $table->string('phone');
            $table->longText('address');
            $table->string('title');
            $table->float('rating');
            $table->string('image_url');
            $table->string('gender');
            $table->string('birthday');
            $table->integer('height');
            $table->integer('weight');
            $table->string('profile_photo', 2048)->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
