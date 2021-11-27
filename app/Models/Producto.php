<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='productos';
    public $timestamps=false;

    protected $fillable=[
                'producto'
                ,'existencias'
                ,'precio_unitario'
                ,'fotografia'
                ,'descripcion'
                ,'estado'
                ,'tasa_iva'
    ];

    public static function reglas(){
        return[
                'producto'=>'required|max:45'
                ,'existencias'=>'required|integer|min:0'
                ,'precio_unitario'=>'required|numeric|min:0'
                ,'fotografia'=>'required|max:45'
                ,'descripcion'=>'required|max:1000'
                ,'estado'=>'required|in:activo,inactivo'
                ,'tasa_iva'=>'required|numeric|min:0'
        ];
    }
}
