<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Modelvendas;
use Illuminate\Http\Request;
use App\Models\ModelClientes;
use App\Models\ModelMercadorias;
use App\Models\ModelFornecedores;
use App\Models\Modelvendas_mercadorias;


class PadraoController extends Controller
{
    
    private $Cliente;
    private $Fornecedor;
    private $Mercadoria;
    private $Vendas_mercadorias;
    private $Vendas;
    private $Usuario;

    public function __construct(){

        $this->Cliente = new ModelClientes();
        $this->Fornecedor = new ModelFornecedores();
        $this->Mercadoria = new ModelMercadorias();
        $this->Venda_mercadorias= new Modelvendas_mercadorias();
        $this->Venda= new Modelvendas();
        $this->Usuario = new User();

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('padrao_index');
        /**
         * Teste de relacionamento
         */
        dd($this->Fornecedor->find(1)->relationMercadorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
