<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{

  public function  __construct(){
      header("Acess-Control-Allow-Origin:*");
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        if($clientes)
        {
          return response()->json($clientes);
        }else {
          return response()->json(['data'=>"Não foi encontrado nenhum cliente",'status'=>false]);
        }

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
        $dados = $request->all();
        $cliente = Cliente::create($dados);

        if($cliente){
          return response()->json($cliente);
        }else{
          return response()->json(['data'=>"Erro ao inserir cliente",'status'=>false]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        //retorna um cliente de acordo com o id passado
        $cliente = Cliente::where([
             'email'=>$email
        ])->get();


        $msgError = array(
            'msg'=>"false"
        );

        if(count($cliente) > 0){
            $id = $cliente[0]["id"];
            $email2 = $cliente[0]["email"];
            $senha = $cliente[0]["senha"];

    
            $msgSuccess = array(
            'msg'=>"true",
            'id'=>$id,
            'email'=>$email2,
            'senha'=>$senha
            );
            return response()->json($msgSuccess);
        }else{
            return response()->json($msgError);
        }
        
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
