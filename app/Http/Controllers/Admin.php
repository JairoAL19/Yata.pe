<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Celus;
use App\Http\Requests;
use hasFile;
use file;
use App\User;
use App\Http\Controllers\Controller;
use App\Models\Solicitud_r;
use App\Models\Papelera_Solici;
class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }
    public function products(){
        $products = Celus::where('precio_ini', '>', 0)->orderBy('cod_produc', 'ASC')->get();
        $cont = 1;
        return view('admin/products')->with([
            'product' => $products,
            'cont' => $cont,
            'tip'   => 'products',
        ]);
    }
    public function usuarios(){
        $users = User::all();
        $cont = 1;
        return view('admin/usuarios')->with([
            'usuarios' => $users,
            'cont' => $cont,
        ]);
    }
    public function solicitudes_P(){
        $solici = Solicitud_r::where('courier', 'Pendiente')->get();
        $cont = 1;
        $act = 'P';
        return view('admin/solicitudes')->with([
            'solicitudes' => $solici,
            'cont' => $cont,
            'act'  => $act,
        ]);
    }
    public function solicitudes_I(){
        $solici = Papelera_Solici::where('act', '!=', 'T')->orderBy('created_at', 'DES')->get();
        $cont = 1;
        $act = 'I';
        return view('admin/solicitudes')->with([
            'solicitudes' => $solici,
            'cont' => $cont,
            'act'  => $act,
        ]);
    }
    public function solicitudes_A(){
        $solici = Solicitud_r::where('courier', '!=','Pendiente')->get();
        $cont = 1;
        $act = 'A';
        return view('admin/solicitudes')->with([
            'solicitudes' => $solici,
            'cont' => $cont,
            'act'  => $act,
        ]);
    }
    public function solicitudes_T(){
        $solici = Papelera_Solici::where('act', 'T')->orderBy('created_at', 'DES')->get();
        $cont = 1;
        $act = 'T';
        return view('admin/solicitudes')->with([
            'solicitudes' => $solici,
            'cont' => $cont,
            'act'  => $act,
        ]);
    }
    public function solicitudes_Editar($id){
        $solici = Solicitud_r::find($id);
        $cont = 1;
        return view('admin/editar_solicitud')->with([
            'solicitudes' => $solici,
            'cont' => $cont,
            'cont' => $cont,
        ]);
    }
    public function solicitudes_Editar_post(Request $request,$id){
        $solici = Solicitud_r::find($id);
        $data = $request;
        if($data->act == 'T'){
            $solici_pape = new Papelera_Solici();
            $solici_pape->cod_user = $solici->cod_user;
            $solici_pape->cod_produc = $solici->cod_produc;
            $solici_pape->fecha_r = $solici->fecha_r;
            $solici_pape->precio_fin = $solici->precio_fin;
            $solici_pape->metodo_p = $solici->metodo_p;
            $solici_pape->estado = $solici->estado;
            $solici_pape->courier = $solici->courier;
            $solici_pape->act = $data->act;
            $solici->delete();
            $solici_pape->save();
            return redirect('/admin845967/Solicitudes_T');
        }else{
            $solici->courier = $data->courier;
            $solici->save();
            $cont = 1;
            return redirect('/admin845967/Solicitudes_P');
        }            
    }
    public function usuario_activar($id){
        $usu = User::find($id);
        $usu->dispo = 'A';
        $usu->save();
        return redirect('admin845967/usuarios');
    }
    public function usuario_desactivar($id){
        $usu = User::find($id);
        $usu->dispo = 'D';
        $usu->save();
        return redirect('admin845967/usuarios');
    }
    public function usuarios_activos(){
        $users = User::where('dispo', 'A')->get();
        $cont = 1;
        return view('admin/usuarios')->with([
            'usuarios' => $users,
            'cont' => $cont,
        ]);
    }
    public function usuarios_inactivos(){
        $users = User::where('dispo', 'D')->get();
        $cont = 1;
        return view('admin/usuarios')->with([
            'usuarios' => $users,
            'cont' => $cont,
        ]);
    }
    public function categorias(){
        $products = Celus::where('precio_ini', 0)->orderBy('cod_produc', 'ASC')->get();
        $cont = 1;
        return view('admin/products')->with([
            'product' => $products,
            'cont' => $cont,
            'tip'   => 'categorias',
        ]);
    }
    public function products_activar($id){
            $products = Celus::find($id);
            $products->dispo = 'A';
            $products->save();
            return redirect('admin845967/products');
    }
    public function products_desactivar($id){
            $products = Celus::find($id);
            $products->dispo = 'D';
            $products->save();
            return redirect('admin845967/products');
    }
    public function create_products(){
        $cont = 1;
        $categorias = Celus::where('precio_ini', 0)->orderBy('cod_produc', 'ASC')->where('dispo', 'A')->get();
        return view('admin/create_product')->with([
                'cont' => $cont,
                'categorias' => $categorias,
            ]);
    }
    public function create_categorias(){
        $cont = 1;
        return view('admin/create_categorias')->with([
                'cont' => $cont,
            ]);
    }
    public function create_products_form(Request $request){
            $data = $request;
            $producto = new Celus();
            $producto->nombre = $data->nombre;
            $producto->cod_produc = $data->cod_produc;
            $producto->memoria = $data->memoria;
            $producto->precio_ini = $data->precio_ini;
            $producto->marca = $data->marca;
            $producto->dispo = $data->dispo;  
            $foto = Celus::where('cod_produc', $producto->cod_produc)->where('precio_ini', 0)->first(); 
            $producto->foto = $foto->foto;
            $producto->save();
            return redirect('/admin845967/agregar_products');

            
    }
    public function create_categorias_form(Request $request){
            $data = $request;
            $producto = new Celus();
            $producto->nombre = $data->nombre;
            $producto->cod_produc = $data->cod_produc;
            $producto->memoria = 0;
            $producto->precio_ini = 0;
            $producto->marca = $data->marca;
            $producto->dispo = $data->dispo;
            $nombre = $_FILES['foto']['name'];
            $nombrer = strtolower($nombre);
            $cd=$_FILES['foto']['tmp_name'];
            $ruta = "img/celulares/".$data->marca."/".$_FILES['foto']['name'];
            $destino = "img/celulares/".$data->marca."/".$nombrer;
            $resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);            
            $producto->foto = $destino;
            $producto->save();
            return redirect('/admin845967/agregar_products');

            
    }

    public function products_activos(){
            $products = Celus::where('precio_ini', '>', 0)->orderBy('cod_produc', 'ASC')->where('dispo', 'A')->get();
            $cont = 1;
            return view('admin/products')->with([
                'product' => $products,
                'cont' => $cont,
                'tip'   => 'products',
            ]);
    }
    public function categorias_activos(){
            $products = Celus::where('precio_ini', 0)->orderBy('cod_produc', 'ASC')->where('dispo', 'A')->get();
            $cont = 1;
            return view('admin/products')->with([
                'product' => $products,
                'cont' => $cont,
                'tip'   => 'categorias',
            ]);
    }
    public function products_inactivos(){
            $products = Celus::where('precio_ini', '>', 0)->orderBy('cod_produc', 'ASC')->where('dispo', 'D')->get();
            $len = count($products);
            $cont = 1;
            if ($len != 0) {
                return view('admin/products')->with([
                'product' => $products,
                'cont' => $cont,
                'tip'   => 'products',
                ]);
            }else{
                return redirect('/admin845967/products');
            }
            
    }
    public function categorias_inactivos(){
            $products = Celus::where('precio_ini', 0)->orderBy('cod_produc', 'ASC')->where('dispo', 'D')->get();
            $len = count($products);
            $cont = 1;
            if ($len != 0) {
                return view('admin/products')->with([
                'product' => $products,
                'cont' => $cont,
                'tip'   => 'categorias',
                ]);
            }else{
                return redirect('/admin845967/categorias');
            }
            
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
