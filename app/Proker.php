<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Proker extends Model
{
	protected $table = 'proker';
    protected $fillable = ['Proker', 'Tanggal_Pelaksanaan', 'Tempat', 'kapel_id'];
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->hasOne('App\Mahasiswa', 'kapel_id', 'Nama');
    }
}
