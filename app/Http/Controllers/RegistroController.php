<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $registro = Registro::create($dados);

        if($registro){
            return response()->json($registro);
        }else{
            return response()->json(['status'=>false]);
        }
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
        $oficinaRegistro = DB::table('registros')
                ->join('oficinas', 'oficinas.id', '=','registros.fk_id_oficina')
                ->join('clientes', 'clientes.id', '=','registros.fk_id_cliente')
                ->select('registros.*','clientes.nome')
                ->where([
                    'registros.fk_id_oficina'=>$id,

                ])
                ->orderBy('id','desc')
                ->take(8)
                ->get()->toArray();

              

                if($oficinaRegistro){
                    return response()->json($oficinaRegistro);
                }else{
                    return response()->json(['status'=>false]);
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
