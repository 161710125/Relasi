<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supir extends Model
{
    protected $table='supirs';
    protected $fillable=array('nama','jenis_kelamin','no_identitas','no_hp','alamat','harga');

    public function booking(){
    	return $this->hasOne('App\booking','id_supir');
    }
}
