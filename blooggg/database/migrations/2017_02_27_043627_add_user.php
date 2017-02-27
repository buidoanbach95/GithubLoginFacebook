<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'name'=>'back',
            'email'=>'back@bdb.com',
            'password'=>'123456',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
            ));
        DB::table('users')->insert(array(
            'name'=>'doan',
            'email'=>'doanback@bdb.com',
            'password'=>'123456',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('mane', '=', 'back')->delete();
        DB::table('users')->where('name', '=', 'doan')->delete();
    }
}
