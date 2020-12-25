<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelvendas extends Model
{
    //use HasFactory;
    protected $table="Vendas";
    public $timestamps=false;
    public function relationCliente()
    {
        return $this->hasOne('App\Models\ModelClientes','id','id_cliente');
    }
    public function relationUsuario()
    {
        return $this->hasOne('App\Models\User','id','id_usuario');
    }
    public function relationVendas_Mercadorias()
    {
        return $this->hasMany('App\Models\Modelvendas_mercadorias','id_venda');
    }
    protected $fillable=[
        'data_venda',
        'id_usuario',
        'id_cliente',
        'valor_venda',
        'observacao'
    ];
}