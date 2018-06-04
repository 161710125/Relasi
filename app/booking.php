<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
	protected $fillable = array('id_customer','id_mobil','id_supir','tgl_pinjam','tgl_kembali');
}
