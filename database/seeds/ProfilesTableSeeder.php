<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profile::insert([
        [    
        	'id' => 1,
        	'jenis_kelamin' => 'laki-laki',
        	'pekerjaan' => 'programmer',
        	'alamat' => 'sukoharjo',
        	'telp' => '085725178000',
        	'linkedin' => 'https://www.linkedin.com/in/arifrohmadi',
        	'angkatan' => '2008',
        ],
        [
        	'id' => 2,
        	'jenis_kelamin' => 'laki-laki',
        	'pekerjaan' => 'network administrator',
        	'alamat' => 'sragen',
        	'telp' => '085725077992',
        	'linkedin' => 'https://www.linkedin.com/in/khoirul-syaifuddin-aab240124/',
        	'angkatan' => '2009',
        ],
        [
        	'id' => 3,
        	'jenis_kelamin' => 'laki-laki',
        	'pekerjaan' => 'Programmer at FundPlaces',
        	'alamat' => 'solo',
        	'telp' => '087836128202',
        	'linkedin' => 'https://www.linkedin.com/in/neno-sulistiyawan-4909a871/',
        	'angkatan' => '2009',
        ]
        ]);
    }
}
