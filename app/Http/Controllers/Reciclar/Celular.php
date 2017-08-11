<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
Use App\Models\Celus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Solicitud_r;
use App\Models\Courier;
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
            $cel = Celus::where('marca', 'Iphone')->where('memoria', '0')->where('dispo', 'A')->orderBy('nombre', 'ASC')->get();
            return view('recycle.celulares.iphone')->with('celular', $cel);
        }
        public function Samsung_P(){
            $cel = Celus::where('marca', 'Samsung')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.samsung')->with('celular', $cel);
        }
        public function HTC_P(){
            $cel = Celus::where('marca', 'HTC')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.htc')->with('celular', $cel);
        }
        public function Huawei_P(){
            $cel = Celus::where('marca', 'Huawei')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.huawei')->with('celular', $cel);
        }
        public function Motorola_P(){
            $cel = Celus::where('marca', 'Motorola')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.motorola')->with('celular', $cel);
        }
        public function LG_P(){
            $cel = Celus::where('marca', 'LG')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.lg')->with('celular', $cel);
        }
        public function ZTE_P(){
            $cel = Celus::where('marca', 'ZTE')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.zte')->with('celular', $cel);
        }
        public function Azumi_P(){
            $cel = Celus::where('marca', 'Azumi')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.azumi')->with('celular', $cel);
        }
        public function Nokia_P(){
            $cel = Celus::where('marca', 'Nokia')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.nokia')->with('celular', $cel);
        }
        public function Blackberry_P(){
            $cel = Celus::where('marca', 'Blackberry')->where('dispo', 'A')->where('precio_ini','!=','0')->get();
            return view('recycle.celulares.blackberry')->with('celular', $cel);
        }
    //LISTA DE MARCAS END

    //FOFRMULARIO DE CELULARES
        public function P_Form ($cod_produc){
            $cel = Celus::where('cod_produc', $cod_produc)->get();

            if($cel[0]->marca == 'IPHONE'){
                $cel = Celus::where('marca', 'IPHONE')->Where('cod_produc', $cod_produc)->where('dispo', 'A')->where('memoria','>','0')->orderBy('memoria','ASC')->get();
                return view('recycle.celulares.iphone_memoria')->with('celular', $cel); 
            }else{               
                $cel = Celus::where('cod_produc', $cod_produc)->where('precio_ini', '!=', '0')->get();
                $perf = intval($cel[0]->precio_ini);
                $buen = intval($cel[0]->precio_ini*0.9);
                $regu = intval($cel[0]->precio_ini*0.75);
                $malo = intval($cel[0]->precio_ini*0.35);
                $defe = intval($cel[0]->precio_ini*0.17);
                $bloq = intval($cel[0]->precio_ini*0.04);
                $max  = 1;
                $min  = 0;                
                $m = date("m");
                $y = date("Y");
                $ud = date("d", (mktime(0,0,0,$m+1,1,$y)-1));
                if ($m != 12) { $ysig = $y; }else{ $ysig = $y+1; }                
                for ($i=1; $i <= $ud; $i++) { 
                    $disable[$i]='';
                }
                if ($m < 10) {
                    $mes = substr($m, -1);
                }else{
                    $mes = $m;
                }
                
                if ($m == "12") {
                    $mesig = 1;    
                }elseif($m != "12"){
                    if ($m+1 < 10) {
                        $mesig = substr($m+1, -1);
                    }else{
                        $mesig = $m+1;
                    }
                }                
                for ($i=1; $i <= $ud; $i++) { 
                    if ($i < 10) {
                        $turno = Courier::where('dia', '0'.$i.'/'.$mes.'/'.$y)->where('hora', '00:00:00')->where('dispo', 'd')->first();
                    }else{
                        $turno = Courier::where('dia', $i.'/'.$mes.'/'.$y)->where('hora', '00:00:00')->where('dispo', 'd')->first(); 
                    }
                    if (!$turno) {
                        $disable[$i]=  $mes.'-'.$i.'-'.$y;
                    }
                }
                $uds = date("d", (mktime(0,0,0,$mesig+1,1,$y)-1));
                for ($i=1; $i <= $uds; $i++) { 
                    $disablesig[$i]='';
                }
                for ($i=1; $i <= $uds; $i++) { 
                    if ($i < 10) {
                        $turnosig = Courier::where('dia', '0'.$i.'/'.$mesig.'/'.$ysig)->where('hora', '00:00:00')->where('dispo', 'd')->first();
                    }else{
                        $turnosig = Courier::where('dia', $i.'/'.$mesig.'/'.$ysig)->where('hora', '00:00:00')->where('dispo', 'd')->first(); 
                    }                                       
                    if (!$turnosig) {
                        $disablesig[$i]=  $mesig.'-'.$i.'-'.$ysig;
                    }
                }
                return view('recycle.celulares.form_celulares')->with([
                    'celular' => $cel,
                    'perf'    => $perf,
                    'regu'    => $regu,
                    'malo'    => $malo,
                    'buen'    => $buen,
                    'defe'    => $defe,
                    'bloq'    => $bloq,
                    'max'     => $max,
                    'min'     => $min,                    
                    'disable' => $disable,
                    'disablesig' =>$disablesig,
                ]); 
            }
        }
        public function P_Form_Sub ($cod_produc, $memoria){
            $cel = Celus::where('cod_produc', $cod_produc)->where('memoria', $memoria)->get();         

                $perf = intval($cel[0]->precio_ini);
                $buen = intval($cel[0]->precio_ini*0.9);
                $regu = intval($cel[0]->precio_ini*0.75);
                $malo = intval($cel[0]->precio_ini*0.35);
                $defe = intval($cel[0]->precio_ini*0.17);
                $bloq = intval($cel[0]->precio_ini*0.04);
                $max  = 1;
                $min  = 0;                
                $m = date("m");
                $y = date("Y");
                $ud = date("d", (mktime(0,0,0,$m+1,1,$y)-1));
                if ($m != 12) { $ysig = $y; }else{ $ysig = $y+1; }                
                for ($i=1; $i <= $ud; $i++) { 
                    $disable[$i]='';
                }
                if ($m < 10) {
                    $mes = substr($m, -1);
                }else{
                    $mes = $m;
                }
                
                if ($m == "12") {
                    $mesig = 1;    
                }elseif($m != "12"){
                    if ($m+1 < 10) {
                        $mesig = substr($m+1, -1);
                    }else{
                        $mesig = $m+1;
                    }
                }                
                for ($i=1; $i <= $ud; $i++) { 
                    if ($i < 10) {
                        $turno = Courier::where('dia', '0'.$i.'/'.$mes.'/'.$y)->where('hora', '00:00:00')->where('dispo', 'd')->first();
                    }else{
                        $turno = Courier::where('dia', $i.'/'.$mes.'/'.$y)->where('hora', '00:00:00')->where('dispo', 'd')->first(); 
                    }
                    if (!$turno) {
                        $disable[$i]=  $mes.'-'.$i.'-'.$y;
                    }
                }
                $uds = date("d", (mktime(0,0,0,$mesig+1,1,$y)-1));
                for ($i=1; $i <= $uds; $i++) { 
                    $disablesig[$i]='';
                }
                for ($i=1; $i <= $uds; $i++) { 
                    if ($i < 10) {
                        $turnosig = Courier::where('dia', '0'.$i.'/'.$mesig.'/'.$ysig)->where('hora', '00:00:00')->where('dispo', 'd')->first();
                    }else{
                        $turnosig = Courier::where('dia', $i.'/'.$mesig.'/'.$ysig)->where('hora', '00:00:00')->where('dispo', 'd')->first(); 
                    }                                       
                    if (!$turnosig) {
                        $disablesig[$i]=  $mesig.'-'.$i.'-'.$ysig;
                    }
                }
                return view('recycle.celulares.form_celulares')->with([
                    'celular' => $cel,
                    'perf'    => $perf,
                    'regu'    => $regu,
                    'malo'    => $malo,
                    'buen'    => $buen,
                    'defe'    => $defe,
                    'bloq'    => $bloq,
                    'max'     => $max,
                    'min'     => $min,
                    'disable' => $disable,
                    'disablesig' =>$disablesig,
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

            $dia= substr($data->fecha_r, -10,2);
            $mes= substr($data->fecha_r, -6,1);
            $anio= substr($data->fecha_r, -4);
            $courier = Courier::where('dia', $dia.'/'.$mes.'/'.$anio)->where('hora', '00:00:00')->first();
            $courier->delete();

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
