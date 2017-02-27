<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoogleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('google_user')->insert(array(
            'google_name'=>'bach',
            'google_user'=>'bachbd',
            'google_email'=>'buibach@bdb.com',
            'google_password'=>'123456',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('google_user')->insert(array(
            'google_name'=>'bui',
            'google_user'=>'soulthewind',
            'google_email'=>'soulthewind@bdb.com',
            'google_password'=>'123456',
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
        DB::table('google_user')->where('name', '=', 'bach')->delete();
        DB::table('google_user')->where('name', '=', 'bui')->delete();
    }
}