<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //relacion con categorias

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public function detalles(){
        return $this->hasMany(Detalle_venta::class);
    }

}