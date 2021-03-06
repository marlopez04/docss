<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentencia extends Model
{
    use HasFactory;

    protected $table = "sentencias";
    protected $fillable = ['id_causa','fecha_sorteo','fecha_vencimiento','instancia_sentencia','id_tipo','estado'];
    

    public function causa()
    {
    	return $this->belongsTo('App\Models\Causa', 'id_causa', 'id');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\Models\Usuario', 'id_usuario', 'id');
    }

    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento');
    }


}
