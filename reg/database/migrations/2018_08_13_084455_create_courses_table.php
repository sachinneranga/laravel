<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('iscompleted')->default(0);
            $table->string('course_name');
            $table->string('f_name');
            $table->string('i_name');
            $table->string('certificate');
            $table->date('bdate');
            $table->string('passport');
            $table->string('gender');
            $table->string('language');
            $table->string('address');
            $table->integer('telephone');
           

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
        Schema::dropIfExists('courses');
    }

    
}
