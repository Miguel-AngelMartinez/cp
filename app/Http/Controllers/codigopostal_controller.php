<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class codigopostal_controller extends Controller
{
    //
    public function index()
    {
        return view('index');
    }


     public function consulta()
    {
        $note = DB::table('codigos_postales')->select('id','codigo','asentamiento','tipo_asenta','municipio','estado','ciudad')->get();
            $CP=[];
        foreach ($note as $note) {
            $CP[] =[
            'id'=> $note->id,
            'codigo'=> $note->codigo,
            'asentamiento'=> $note->asentamiento,
            'tipo'=> $note->tipo_asenta,
            'municipio'=> $note->municipio,
            'estado'=> $note->estado,
            'ciudad'=> $note->ciudad,
            ];
        }
        return $CP;
    }

    public function index2()
    {

        $name=request("name");
        $codigo=request("cp");

        return view('molde',['CP'=>$this->consulta(),'name'=>$name,'codigo'=>$codigo]);

    }
    public function index3()
    {
        $asentamiento=request("asentamiento");

        return view('direccion',['asentamiento'=>$asentamiento,'CP'=>$this->consulta()]);

    }


    public function direccion(){

    }
}
