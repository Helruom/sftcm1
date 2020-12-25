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
        //dd($this->Fornecedor->find(1)->relationMercadorias());
        $mercadoria=$this->Mercadoria->paginate(10);
        return view('teste',compact('mercadoria'));
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
        $cliente=$this->Cliente->paginate(10);
        return view('clientes', compact('cliente'));
    }
    public function editCliente($id){
        $cliente=$this->Cliente->find($id);
        return view('cliente_editar',compact('cliente'));
    }
    public function updateCliente(Request $request)
    {
        $this->Cliente->where(['id'=>$request->id])->update([
            'Nome'=>$request->nome,
            'Telefone'=>$request->telefone,
            'Email'=>$request->email,
        ]);
        return redirect('/clientes');
    }
    public function createCliente()
    {
        return view('cliente_criar');
    }
    public function storeCliente(Request $request)
    {
        $this->Cliente->create([
            'Nome'=>$request->nome,
            'Telefone'=>$request->telefone,
            'Email'=>$request->email,
        ]);
        return redirect('/clientes');
    }
    public function destroyCliente($id)
    {
        $del=$this->Cliente->destroy($id);
        return redirect('/clientes');
    }
    /**
     * Funções de fornecedores
     */
    public function fornecedores(){
        $fornecedor=$this->Fornecedor->paginate(10);
        return view('fornecedores', compact('fornecedor'));
    }
    public function editFornecedor($id){
        $fornecedor=$this->Fornecedor->find($id);
        return view('fornecedor_editar',compact('fornecedor'));
    }
    public function updateFornecedor(Request $request)
    {
        $this->Fornecedor->where(['id'=>$request->id])->update([
            'Nome'=>$request->nome,
            'Telefone'=>$request->telefone,
            'Email'=>$request->email,
        ]);
        return redirect('/fornecedores');
    }
    public function createFornecedor()
    {
        return view('fornecedor_criar');
    }
    public function storeFornecedor(Request $request)
    {
        $this->Fornecedor->create([
            'Nome'=>$request->nome,
            'Telefone'=>$request->telefone,
            'Email'=>$request->email,
        ]);
        return redirect('/fornecedores');
    }
    public function destroyFornecedor($id)
    {
        $del=$this->Fornecedor->destroy($id);
        return redirect('/fornecedores');
    }
    /**
     * Funções de Mercadorias
     */
    public function mercadorias(){
        $mercadoria=$this->Mercadoria->paginate(10);
        return view('mercadorias',compact('mercadoria'));
    }
    public function editMercadoria($id){
        $mercadoria=$this->Mercadoria->find($id);
        $fornecedor=$this->Fornecedor->all();
        return view('mercadoria_editar',compact('mercadoria','fornecedor'));
    }
    public function updateMercadoria(Request $request)
    {
        $this->Mercadoria->where(['id'=>$request->id])->update([
            'nome'=>$request->nome,
            'id_fornecedor'=>$request->id_fornecedor,
            'preço'=>$request->preço,
            'estoque'=>$request->estoque,
            'descricao'=>$request->descricao
        ]);
        return redirect('/mercadorias');
    }
    public function createMercadoria()
    {
        $fornecedor=$this->Fornecedor->all();
        return view('mercadoria_criar',compact('fornecedor'));
    }
    public function storeMercadoria(Request $request)
    {
        $this->Mercadoria->create([
            'nome'=>$request->nome,
            'id_fornecedor'=>$request->id_fornecedor,
            'preço'=>$request->preço,
            'estoque'=>$request->estoque,
            'descricao'=>$request->descricao
        ]);
        $fornecedor=$this->Fornecedor->all();
        return view('mercadoria_criar',compact('fornecedor'));
    }
    public function destroyMercadoria($id)
    {
        $del=$this->Mercadoria->destroy($id);
        return redirect('/mercadorias');
    }
    /**
     * Funções de usuario
     */
    public function usuarios(){
        $usuario=$this->Usuario->paginate(10);
        return view('usuarios', compact('usuario'));
    }
    public function editUsuario($id){
        $usuario=$this->Usuario->find($id);
        return view('usuario_editar',compact('usuario'));
        }
    public function updateUsuario(Request $request)
    {
        $this->Usuario->where(['id'=>$request->id])->update([
            'Nome'=>$request->nome,
            'Email'=>$request->email,
            'Senha'=>$request->senha,
        ]);
        return redirect('/usuarios');
    }
    public function createUsuario()
    {
        return view('usuario_criar');
    }
    public function storeUsuario(Request $request)
    {
        $this->Usuario->create([
            'Nome'=>$request->nome,
            'Email'=>$request->email,
            'Senha'=>$request->senha,
        ]);
        return redirect('/usuarios');
    }
    public function destroyUsuario($id)
    {
        $del=$this->Usuario->destroy($id);
        return redirect('/usuarios');
    }
    /**
     * funções de vendas
     */
    public function vendas(){
        $venda=$this->Venda->paginate(10);
        return view('vendas', compact('venda'));
    }
    public function createVenda()
    {
        $cliente=$this->Cliente->all();
        $usuario=$this->Usuario->all();
        $mercadoria=$this->Mercadoria->all();   
        return view('venda_criar',compact('cliente','usuario'));
    }
    /**
     * Demais funções
     */
    public function incio()
    {
        return view('incio_1');
    }
}
