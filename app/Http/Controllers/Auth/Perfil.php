<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Solicitud_r;
use App\Models\Papelera_Solici;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class Perfil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solici = Solicitud_r::where('cod_user', Auth::User()->id)->get();
        $solici_r = Papelera_Solici::where('cod_user', Auth::User()->id)->get();
        $concretado = Papelera_Solici::where('cod_user', Auth::User()->id)->where('act', 'T')->get();
        $solici_c = count($solici);
        $solici_c = $solici_c + count($solici_r);
        $concretado_c = count($concretado);
        $ganado = 0;
        foreach ($concretado as $prec) {
            $ganado = $ganado + $prec->precio_fin;
        }
        return view('recycle.perfil')->with([
            'solici' => $solici_c,
            'concretado' => $concretado_c,
            'ganado' => $ganado,
        ]);
    }
    public function actualizar_p(Request $request){
        $data = $request;
        $user = User::find($data->id);
        $user->name = $data->name;
        $user->trabajo = $data->trabajo;
        $user->fecha_naci = $data->fecha_naci;
        $user->direc = $data->direc;
        $user->ciudad = $data->ciudad;
        $user->pais = $data->pais;
        $user->zip_code = $data->zip_code;
        $user->about_me = $data->about_me;
        $nombre = $_FILES['avatar']['name'];
        $nombrer = strtolower($nombre);
        $cd=$_FILES['avatar']['tmp_name'];
        $ruta = "img/perfiles/".$user->email;
        $destino = "/img/perfiles/".$user->email;
        $resultado = @move_uploaded_file($_FILES["avatar"]["tmp_name"], $ruta);                        
        $user->avatar = $destino;


        $user->save();
        return redirect('Reciclar/Perfil');       
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
