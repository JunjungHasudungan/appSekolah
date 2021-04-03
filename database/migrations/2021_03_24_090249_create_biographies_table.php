<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiographiesTable extends Migration
{
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('id_biography')->unique();
            $table->string('birth_of_day');
            $table->string('birth_of_pleace');
            $table->integer('user_id')->index();
            $table->integer('role_id')->index();
            $table->double('total_point', 10, 0)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
