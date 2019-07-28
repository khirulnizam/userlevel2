<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
//use DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create Admin dummy user
        DB::table('users')->insert(
        	['name'=>'Khirulnizam',
        	'email'=>'kerul@gmail.com',
        	'password'=> Hash::make('secret'),
        	'userlevel'=>'Admin',
        	]
        );
        DB::table('users')->insert(
        	['name'=>'Ali Mamat',
        	'email'=>'ali@gmail.com',
        	'password'=> Hash::make('secret'),
        	'userlevel'=>'Admin',
        	]
        );

        //pengguna Awam
        DB::table('users')->insert(
        	['name'=>'Minah Abu',
        	'email'=>'min@gmail.com',
        	'password'=> Hash::make('secret'),
        	'userlevel'=>'Awam',
        	]
        );
        DB::table('users')->insert(
        	['name'=>'Abu Bakar',
        	'email'=>'abu@gmail.com',
        	'password'=> Hash::make('secret'),
        	'userlevel'=>'Awam',
        	]
        );
    }
}
