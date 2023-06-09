<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('nickname')->nullable();
            $table->string('entryyear')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phone')->nullable();
            $table->string('alt_phone')->nullable();
            $table->string('post_held')->nullable();
            $table->string('associate_post')->nullable();
            $table->string('dob')->nullable();
            $table->string('location')->nullable();
            $table->string('gender')->nullable();
            $table->string('institution')->nullable();
            $table->string('course')->nullable(); 
            $table->string('pimage')->nullable();
            $table->string('description')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
