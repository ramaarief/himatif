<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proker;

class Mahasiswa extends Model
{
    protected $table = 'member';
    protected $fillable = ['NIM', 'Nama', 'Tahun_Angkatan', 'Alamat', 'Photo'];
    public $timestamps = false;

   	public function proker()
    {
        return $this->belongsTo('App\Proker', 'Nama', 'kapel_id');
    }
}
