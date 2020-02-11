<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
        	'NIM' => '183140714111004',
        	'Nama' => 'Joni',
        	'Tahun_Angkatan' => 2018,
        	'Alamat' => 'Jl. Panglateh',
        	'Photo' => 'photo.jpg'
        ]);
    }
}
