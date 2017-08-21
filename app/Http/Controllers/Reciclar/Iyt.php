<?php

namespace App\Http\Controllers\Reciclar;

use Illuminate\Http\Request;
Use App\Models\Celus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Solicitud_r;
use App\Models\Courier;
class Iyt extends Controller
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
    public function iPad_P(){
            $ipad = Celus::where('marca', 'iPad')->where('memoria', '0')->where('dispo', 'A')->orderBy('nombre', 'ASC')->get();
            return view('recycle.ipads_y_tablets.ipad')->with('ipads', $ipad);
    }
    public function Samsung_P(){
            $tablets = Celus::where('marca', 'Samsung_T')->where('precio_ini', '!=', '0')->where('dispo', 'A')->orderBy('nombre', 'ASC')->get();
            return view('recycle.ipads_y_tablets.samsung')->with('tablets', $tablets);
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
