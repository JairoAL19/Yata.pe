<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Models\Celus;
use App\User;
use App\Models\Solicitud_r;
use App\Models\Papelera_Solici;
use Auth;

class Solicitud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $soli = Solicitud_r::where('cod_user', Auth::user()->id)->orderBy('created_at', 'ASC')->get();
        $soli_reci = Papelera_Solici::where('cod_user', Auth::user()->id)->orderBy('act', 'DES')->get();
        $cont = count($soli);
        if ($cont != 0) {
            for ($i=1; $i <= $cont; $i++) { 
            $data[$i] = new Solicitud_r();
            }
            $h=1;
            foreach ($soli as $solici){
                $cel = Celus::where('nombre', $solici->cod_produc)->where('precio_ini','!=',0)->first();
                $solici->nombre = $cel->nombre;
                $solici->foto = $cel->foto;
                $data[$h] = $solici;
                $h++;
            }
            foreach ($soli_reci as $solici_reci){
                $cel = Celus::where('nombre', $solici_reci->cod_produc)->where('precio_ini','!=',0)->first();
                $solici_reci->nombre = $cel->nombre;
                $solici_reci->foto = $cel->foto;
                $data[$h] = $solici_reci;
                $h++;
            }
            return view('recycle.solicitudes')->with([
                'data' => $data,
            ]); 
        }else{
            $data= [];
            return view('recycle.solicitudes')->with([
                'data' => $data,
            ]); 
        }
        
    }
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

        $soli = Solicitud_r::find($id);
        if (Auth::user()->id == $soli->cod_user) {
            $pape = new Papelera_Solici();
            $pape->cod_user = $soli->cod_user;
            $pape->cod_produc = $soli->cod_produc;
            $pape->fecha_r = $soli->fecha_r;
            $pape->precio_fin = $soli->precio_fin;
            $pape->metodo_p = $soli->metodo_p;
            $pape->estado = $soli->estado;
            $pape->act = 'I';
            $pape->courier = 'Cancelado por Usuario';
            $pape->save();
            $soli->delete();
            return redirect('/Reciclar/Solicitudes');
        }else{
            return redirect('/Reciclar/Solicitudes');
        }
        
    }
}
