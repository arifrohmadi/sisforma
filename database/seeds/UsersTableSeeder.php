<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
        	[
        		'name' => 'arif rohmadi',
        		'email' => 'arifrohmadi@gmail.com',
        		'password' => \Hash::make('secret')
        	],
        	[
        		'name' => 'khoirul syaifuddin',
        		'email' => 'khoirul@student.uns.ac.id',
        		'password' => \Hash::make('secret')	
        	],
        	[
        		'name' => 'neno sulistiyawan',
        		'email' => 'aburamesino@gmail.com',
        		'password' => \Hash::make('secret')
        	],
        ]);
    }
}
