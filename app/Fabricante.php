<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;
class Fabricante extends Model
{
    //
    protected $table = 'fabricantes';

    protected $fillable = ['nombre', 'telefono'];
    protected $hidden = ['created_at', 'updated_at'];

    public function vehiculos ()
    {
    	return $this->hasMany('App\Vehiculo', 'fabricante_id');
    }

}
