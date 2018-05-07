<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oficina;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(){
        header("Acess-Control-Allow-Origin:*");
    }

    public function index()
    {
        //
        //recuperando arquivo do banco
        $oficinas = Oficina::all();
        return response()->json($oficinas);
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
        $dados = $request->all();
        $oficina = Oficina::create($dados);

        if($oficina){
            return response()->json($oficina);
        }else{
            return response()->json(['data'=>"Erro ao salvar produto",'status'=>false]);
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
        //
        //retorna um cliente de acordo com o id passado
        $oficina = Oficina::where([
            'email'=>$email
       ])->get();


       $msgError = array(
           'msg'=>"false"
       );

       if(count($oficina) > 0){
           $id = $oficina[0]["id"];
           $email2 = $oficina[0]["email"];
           $senha = $oficina[0]["senha"];

   
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
    public function getIdOficina($nome)
    {
        //
        //retorna um cliente de acordo com o id passado
        $oficina = Oficina::where([
            'nome'=>$nome
       ])->get();


       $msgError = array(
           'msg'=>"false"
       );

       if(count($oficina) > 0){
           $id = $oficina[0]["id"];
        
   
           $msgSuccess = array(
           'msg'=>"true",
           'id'=>$id,
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
