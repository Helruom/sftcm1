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
        /**
         * Teste de relacionamento
         */
        dd($this->Fornecedor->find(1)->relationMercadorias());
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
        //echo $id;
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
    /**
     * Funções de clientes
     */
    public function clientes(){
        $cliente=$this->Cliente->all();
        return view('clientes', compact('cliente'));
    }
    /**
     * Funções de fornecedores
     */
    public function fornecedores(){
        $fornecedor=$this->Fornecedor->all();
        return view('fornecedores', compact('fornecedor'));
    }
    /**
     * Funções de Mercadorias
     */
    public function mercadorias(){
        $mercadoria=$this->Mercadoria->all()->sortBydesc('id');
        return view('mercadorias',compact('mercadoria'));
    }
    public function showMercadoria($id){
        $mercadoria=$this->Mercadoria->find($id);
        return view('mercadoria_editar',compact('mercadoria'));
    }
    /**
     * Funções de usuario
     */
    public function usuarios(){
        $usuario=$this->Usuario->all();
        return view('usuarios', compact('usuario'));
    }
    /**
     * funções de vendas
     */
    public function vendas(){
        $venda=$this->Venda->all();
        return view('vendas', compact('venda'));
    }
    /**
     * Demais funções
     */
    public function incio()
    {
        return view('incio_1');
    }
}
