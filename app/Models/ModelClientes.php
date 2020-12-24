<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelClientes extends Model
{
   protected $table='Clientes';
   protected $fillable=['Nome','Telefone','Email'];
   public $timestamps=false;
    // use HasFactory;

    public function relationVendasCliente()
    {
        return $this->hasMany('App\Models\Modelvendas','id_cliente');
    }
}
