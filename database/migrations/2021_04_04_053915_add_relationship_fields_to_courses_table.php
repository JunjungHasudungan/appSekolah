<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Mata Kuliah
        Schema::table('courses', function (Blueprint $table) {
            // majors => majors
            $table->unsignedInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors');
       
        });
    }
}
