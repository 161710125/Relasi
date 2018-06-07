<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
	protected $fillable = array('id_customer','id_mobil','id_supir','tgl_pinjam','tgl_kembali');


		public function customer() {
		return $this->belongsTo('App\customer', 'id_customer');
	}

	public function mobil() {
		return $this->belongsTo('App\mobil', 'id_mobil');
	}

	public function supir() {
		return $this->belongsTo('App\supir', 'id_supir');
	}
}
