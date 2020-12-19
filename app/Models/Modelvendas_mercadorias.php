<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelvendas_mercadorias extends Model
{
    //use HasFactory;
    protected $table='Vendas_Mercadorias';
    public function relationVendas()
    {
        return $this->hasMany('App\Models\Modelvendas','id','id_venda');
    }
}
