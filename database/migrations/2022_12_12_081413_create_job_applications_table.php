<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
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
            $table->string('last_work');
            $table->string('job_location');
            $table->string('duration');
            $table->string('designation');
            $table->double('old_salary');
            $table->double('new_salary');
            $table->string('cv');
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
        Schema::dropIfExists('job_applications');
    }
}
