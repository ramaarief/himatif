<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
        'NIM' => $faker->nim,
		'Nama' => $faker->nama,
		'Tahun_Angkatan' => $faker->tahun,
		'Alamat' => $faker->alamat,
		'Photo' => $faker->photo        
    ];
});
