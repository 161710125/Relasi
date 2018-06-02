<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customers';
    protected $fillable=array('nama','alamat','no_hp','jenis_kelamin');

    public function booking(){
    	return $this->hasMany('App\booking','id_customer');
    }
}
