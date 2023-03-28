<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('scholarship_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('dob');
            $table->string('sex');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('education_level');
            $table->string('course');
            $table->string('school_name');
            $table->string('grade');
            $table->boolean('status');
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
        Schema::dropIfExists('scholarship_applications');
    }
}
