<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
Use App\Models\Celus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Solicitud_r;

class Celular extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('recycle.home');
    }
    public function index_aceptado($data){
        $solici_r = Solicitud_r::find($data);
        $usuario = User::find($solici_r->cod_user);
        return view('recycle.aceptado')->with([
            'data' => $solici_r,
            'usuario' =>$usuario->name,
        ]);
    }
    //LISTA DE MARCAS
        public function Iphone_P(){
            $cel = Celus::where('marca', 'Iphone')->where('memoria', '0')->orderBy('nombre', 'ASC')->get();
            return view('recycle.celulares.iphone')->with('celular', $cel);
        }
        public function Samsung_P(){
            $cel = Celus::where('marca', 'Samsung')->get();
            return view('recycle.celulares.samsung')->with('celular', $cel);
        }
        public function HTC_P(){
            $cel = Celus::where('marca', 'HTC')->get();
            return view('recycle.celulares.htc')->with('celular', $cel);
        }
        public function Huawei_P(){
            $cel = Celus::where('marca', 'Huawei')->get();
            return view('recycle.celulares.huawei')->with('celular', $cel);
        }
        public function Motorola_P(){
            $cel = Celus::where('marca', 'Motorola')->get();
            return view('recycle.celulares.motorola')->with('celular', $cel);
        }
        public function LG_P(){
            $cel = Celus::where('marca', 'LG')->get();
            return view('recycle.celulares.lg')->with('celular', $cel);
        }
        public function ZTE_P(){
            $cel = Celus::where('marca', 'ZTE')->get();
            return view('recycle.celulares.zte')->with('celular', $cel);
        }
        public function Azumi_P(){
            $cel = Celus::where('marca', 'Azumi')->get();
            return view('recycle.celulares.azumi')->with('celular', $cel);
        }
        public function Nokia_P(){
            $cel = Celus::where('marca', 'Nokia')->get();
            return view('recycle.celulares.nokia')->with('celular', $cel);
        }
        public function Blackberry_P(){
            $cel = Celus::where('marca', 'Blackberry')->get();
            return view('recycle.celulares.blackberry')->with('celular', $cel);
        }
    //LISTA DE MARCAS END

    //FOFRMULARIO DE CELULARES
        public function P_Form ($cod_produc){
            $cel = Celus::where('cod_produc', $cod_produc)->get();

            if($cel[0]->marca == 'IPHONE'){
                $cel = Celus::where('marca', 'IPHONE')->Where('cod_produc', $cod_produc)->where('memoria','>','0')->orderBy('memoria','ASC')->get();
                return view('recycle.celulares.iphone_memoria')->with('celular', $cel); 
            }else{               

                $perf = intval($cel[0]->precio_ini);
                $buen = intval($cel[0]->precio_ini*0.9);
                $regu = intval($cel[0]->precio_ini*0.75);
                $malo = intval($cel[0]->precio_ini*0.35);
                $defe = intval($cel[0]->precio_ini*0.17);
                $bloq = intval($cel[0]->precio_ini*0.04);
                return view('recycle.celulares.form_celulares')->with([
                    'celular' => $cel,
                    'perf'    => $perf,
                    'regu'    => $regu,
                    'malo'    => $malo,
                    'buen'    => $buen,
                    'defe'    => $defe,
                    'bloq'    => $bloq,
                ]); 
            }
        }
        public function P_Form_iphone ($cod_produc, $memoria){
            $cel = Celus::where('cod_produc', $cod_produc)->where('memoria', $memoria)->get();         

                $perf = intval($cel[0]->precio_ini);
                $buen = intval($cel[0]->precio_ini*0.9);
                $regu = intval($cel[0]->precio_ini*0.75);
                $malo = intval($cel[0]->precio_ini*0.35);
                $defe = intval($cel[0]->precio_ini*0.17);
                $bloq = intval($cel[0]->precio_ini*0.04);
                return view('recycle.celulares.form_celulares')->with([
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
            $solici = new Solicitud_r();
            $solici->cod_user = $data->cod_user;
            $solici->cod_produc = $data->cod_produc;
            $solici->fecha_r = $data->fecha_r;
            $solici->precio_fin = $data->precio_fin;
            $solici->metodo_p = $data->metodo_p;
            $solici->estado = $data->estado;
            $solici->courier = 'Pendiente';
            $solici->save();
            return redirect()->route('/Aceptado', ['data' =>  $solici->id, 'marca' => $data->marca.'%Modelo'.$data->cod_produc,   ]);      
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
