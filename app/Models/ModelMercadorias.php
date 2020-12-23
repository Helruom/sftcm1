<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMercadorias extends Model
{
    //use HasFactory;
    protected $table='Mercadorias';
    protected $fillable=['nome','id_fornecedor','preço','descricao','estoque'];
    public function relationFornecedor()
    {
       return $this->hasOne('App\Models\ModelFornecedores','id','id_fornecedor');
    }
    public function relationVendas_mercadorias()
    {
        return $this->hasMany('App\Models\Modelvendas_mercadorias','id_mercadoria');
    }
}
