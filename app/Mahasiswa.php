<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['NIM', 'Nama', 'Tahun_Angkatan', 'Alamat'];
    public $timestamps = false;
}
