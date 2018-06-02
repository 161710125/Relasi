<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeris';
    protected $fillable=array('nama','foto');

    public function mobil(){
    	return $this->hasMany('App\mobil','id_mobil');
    }
}
