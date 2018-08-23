<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('role');
            $table->unsignedInteger('department_id')->nullable();
            $table->text('profile')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('avatar');
            $table->string('avatar_url');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
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
