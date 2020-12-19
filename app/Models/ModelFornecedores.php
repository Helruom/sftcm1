<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFornecedores extends Model
{
   // use HasFactory;
   protected $table='Fornecedores';

   public function relationMercadorias()
   {
      return $this->hasMany('App\Models\ModelMercadorias','id_fornecedor');
   }





}
