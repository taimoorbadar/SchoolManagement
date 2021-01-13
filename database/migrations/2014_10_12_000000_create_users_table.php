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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type')->nullable();
            $table->tinyInteger('block')->default(false);
            $table->string('school_name')->nullable();
            $table->string('school_address')->nullable();
            $table->string('school_email')->nullable();
            $table->string('package')->nullable();
            $table->string('designation')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('join_date')->nullable();
            $table->string('image')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('student_phone')->nullable();
            $table->string('state')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('grade_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('idcard')->nullable();
            $table->string('rollno')->nullable();
            $table->string('extra')->nullable();
            $table->string('remarks')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_phone')->nullable();
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
