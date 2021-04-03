<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{

    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id'); 
                    
            $table->unique(['user_id','role_id']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
