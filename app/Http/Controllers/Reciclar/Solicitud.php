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
        $cel = Celus::All();
        return view('recycle.solicitudes')->with([
            'solicitudes' => $soli,
            'celulares'   => $cel,
        ]); 
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
            $pape->courier = 'Cancelado';
            $pape->save();
            $soli->delete();
            return redirect('/Reciclar/Solicitudes');
        }else{
            return redirect('/Reciclar/Solicitudes');
        }
        
    }
}
