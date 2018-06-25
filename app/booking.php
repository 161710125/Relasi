<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
	protected $fillable = array('nama_p','nama_a','no_hp','alamat','jemput_p','jemput_a','identitas','id_mobil','id_supir','tgl_pinjam','tgl_kembali');


	public function mobil() {
		return $this->belongsTo('App\mobil', 'id_mobil');
	}

	public function supir() {
		return $this->belongsTo('App\supir', 'id_supir');
	}
}