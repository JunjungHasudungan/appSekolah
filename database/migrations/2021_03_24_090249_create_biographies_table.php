<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiographiesTable extends Migration
{
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->string('id_biography')->unique();
            $table->string('birth_of_day');
            $table->string('birth_of_pleace');
            $table->double('total_point', 10, 0)->nullable();

            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedInteger('role_id')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
