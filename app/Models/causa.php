<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causa extends Model
{
    use HasFactory;

    protected $table = "causas";
    protected $fillable = ['descripcion','id_fuero','numero_expediente','actor_imputado','demandado_victima','objeto_procesal'];
    

    public function fuero()
    {
    	return $this->belongsTo('App\fuero', 'id_fuero', 'id');
    }

}
