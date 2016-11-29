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
//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->string('phone');
//            $table->string('password');
//            $table->integer('role_id');
//            //1. administrator
//            //2. internal 1
//            //3. internal 2
//            //4. internal 3
//            //5. internal 4
//            //6. internal 5
//            //7. internal 5
//            //8. internal 5
//            //9. internal 5
//            //10. agent/seller
//            //11. user/buyer
//            $table->integer('status');
//            $table->rememberToken();
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::drop('users');
    }
}
