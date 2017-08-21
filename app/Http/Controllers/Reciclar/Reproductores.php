<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Models\Celus;
use App\User;
use App\Models\Solicitud_r;
use App\Models\Courier;
class Reproductores extends Controller
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
    public function iPod_Nano(){
            $ipods = Celus::where('marca', 'IPOD_NANO')->where('memoria', '0')->where('dispo', 'A')->orderBy('nombre', 'ASC')->get();
            return view('recycle.reproductores.nano')->with('ipods', $ipods);
    }
    public function iPod_Touch(){
            $ipods = Celus::where('marca', 'iPod_Touch')->where('memoria', '0')->where('dispo', 'A')->orderBy('nombre', 'ASC')->get();
            return view('recycle.reproductores.touch')->with('ipods', $ipods);
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
