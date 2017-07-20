<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
Use App\Models\Celus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class Celular extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    //LISTA DE MARCAS
        public function Iphone_P(){
            $cel = Celus::where('marca', 'Iphone')->get();
            return view('recycle.iphone')->with('celular', $cel);
        }
        public function Samsung_P(){
            $cel = Celus::where('marca', 'Samsung')->get();
            return view('recycle.samsung')->with('celular', $cel);
        }
        public function HTC_P(){
            $cel = Celus::where('marca', 'HTC')->get();
            return view('recycle.htc')->with('celular', $cel);
        }
        public function Huawei_P(){
            $cel = Celus::where('marca', 'Huawei')->get();
            return view('recycle.huawei')->with('celular', $cel);
        }
        public function Motorola_P(){
            $cel = Celus::where('marca', 'Motorola')->get();
            return view('recycle.motorola')->with('celular', $cel);
        }
        public function LG_P(){
            $cel = Celus::where('marca', 'LG')->get();
            return view('recycle.lg')->with('celular', $cel);
        }
        public function ZTE_P(){
            $cel = Celus::where('marca', 'ZTE')->get();
            return view('recycle.zte')->with('celular', $cel);
        }
        public function Azumi_P(){
            $cel = Celus::where('marca', 'Azumi')->get();
            return view('recycle.azumi')->with('celular', $cel);
        }
        public function Nokia_P(){
            $cel = Celus::where('marca', 'Nokia')->get();
            return view('recycle.nokia')->with('celular', $cel);
        }
        public function Blackberry_P(){
            $cel = Celus::where('marca', 'Blackberry')->get();
            return view('recycle.blackberry')->with('celular', $cel);
        }
    //LISTA DE MARCAS END

    //FOFRMULARIO DE CELULARES
        public function Iphone_P_Form ($cod_produc){
            $cel = Celus::where('cod_produc', $cod_produc)->get();
            $perf = intval($cel[0]->precio_ini);
            $buen = intval($cel[0]->precio_ini*0.9);
            $regu = intval($cel[0]->precio_ini*0.75);
            $malo = intval($cel[0]->precio_ini*0.35);
            $defe = intval($cel[0]->precio_ini*0.17);
            $bloq = intval($cel[0]->precio_ini*0.04);
            return view('recycle.form_celulares')->with([
                'celular' => $cel,
                'perf'    => $perf,
                'regu'    => $regu,
                'malo'    => $malo,
                'buen'    => $buen,
                'defe'    => $defe,
                'bloq'    => $bloq,
            ]); 
        }
    //FOFRMULARIO DE CELULARES END      

    //GUARDADO DE SOLICITUD RECICLADO
        public function solicitud (Request $request){
            $data = $request;
            dd($data);
        }
    //GUARDADO DE SOLICITUD RECICLADO END   

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
