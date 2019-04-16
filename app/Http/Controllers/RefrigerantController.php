<?php

namespace Fortics\Http\Controllers;

use Fortics\Refrigerant;
use Illuminate\Http\Request;
use DB;

class RefrigerantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('refri.index');
    }

    public function store(Request $request)
    {
        $litrage = str_replace(' ','',$request['litrage']);//retirand os espaços ex: 600 ml => 600ml
        //PROCURANDO LITRAGEM DO MESMO VALOR NO BANCO
        $searchRefri = Refrigerant::where([
            ['brand','=',$request['brand'] ],
            ['litrage' , '=' , $litrage]
        ])->get();
        //SE TIVER, ENVIA MENSAGEM DE ERRO.
        if($searchRefri->count() > 0)
        {
            return response()->json([
                'message' => 'erro', 
                'status' => 400, 
                'messageText' => 'Já Existe um refrigerante com essa Marca e Litragem'], 400);
        }
        //EXECULTADO
        try {
            $request['litrage'] = strtolower($litrage);// CONVERTENDO PARA TUDO MINUSCULA
            $request['created_at'] = date('Y-m-d H:i:s');
            $request['updated_at'] = date('Y-m-d H:i:s');
            Refrigerant::create($request->all());
            return response()->json(['message' => 'success',200],200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error: '.$th->getMessage(), 200], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $litrage = str_replace(' ','',$request['litrage']);//RETIRANDO OS ESPAÇOS
            $request['litrage'] = strtolower($litrage);//MINISCULAS
            Refrigerant::where('id' , $id)->update($request->all());
            return response()->json(['message' => 'success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Refrigerant::where('id' , $id)->delete();
            return response()->json(['message' => 'success'],200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error'], 400);
        }
    }

    public function getAll()
    {
        //TODOS OS REFRIGERANTES
        return DB::table('refrigerants')->orderBy('id' , 'desc')->get();        
    }

    public function search(Request $request)
    {
        try {
            //PESQUISANDO NO BANCO POR QUALQUER ESCOLHA E SUA DESCRIÇÃO
            $refri = Refrigerant::where($request['searchFilter'] , 'like', '%'.$request['searchDescription'].'%')->get();
            return $refri;
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error'], 400);
        }
    }
}
