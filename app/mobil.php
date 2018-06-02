<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'mobils';
	protected $fillable = array('nama','id_galeri','merk','plat_no','kapasitas','tahun_kel','harga');
	public $timestamp = true;

    
    public function booking() {
		return $this->hasOne('App\booking');
	}
	public function galeri() {
		return $this->belongsTo('App\galeri', 'id_galeri');
	}
}
}
