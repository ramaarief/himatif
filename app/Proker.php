<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
	protected $table = 'proker';
    protected $fillable = ['Proker', 'Tanggal_Pelaksanaan', 'Tempat'];
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
