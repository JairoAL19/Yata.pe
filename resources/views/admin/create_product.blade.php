@extends('app_admin')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<!-- <link rel="stylesheet" href="../assets/css/reciclar.css" /> -->

    <div class="main-panel" >
        <nav class="navbar navbar-default" style="background: #4492E0; color: white">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="Tec" style="color: white">Recicla Ganando Dinero</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content" id="bg" >
            <div>        
                <a href="/admin845967/products"><button style="margin-top: 1%; margin-bottom: 1%" type="button" class="btn"><b>Productos</b></button></a>
                <a href="/admin845967/categorias"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn"><b>Categorías</b></button></a>
                <a href="/admin845967/agregar_products"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%; float: right;" type="button" class="btn btn-primary"><b>Agregar Producto</b></button></a>
                <a href="/admin845967/agregar_categorias"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%; float: right;" type="button" class="btn btn-primary"><b>Agregar Categoría</b></button></a>
            </div>
            <form action="/admin845967/agregar_products/15898" method="post" enctype="multipart/form-data">
            <table class="table table-bordered" id="myTable">
                <tr>
                    <td>N°</td>
                    <td>Activo</td>
                    <td>Nombre</td>
                    <td>Categoría</td>
                    <td>Marca</td>
                    <td>Memoria</td>
                    <td>Precio</td>
                    <td>Opciones</td>
                </tr>                
                <tr>
                    <td>{{ $cont++ }}</td>
                    <td style="text-align: center;">
                        <select name="dispo">
                            <option value="A">Activo</option>
                            <option value="D">Inactivo</option>
                        </select>
                    </td>                    
                    <td><input type="text" name="nombre" style="width: 100%"></td>
                    <td>
                        <select name="cod_produc" style="width: 100%">
                        @foreach($categorias as $cate)
                            <option>{{$cate->cod_produc}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="marca">
                            <option>IPHONE</option>
                            <option>SAMSUNG</option>
                            <option>HTC</option>
                            <option>HUAWEI</option>
                            <option>LG</option>
                            <option>MOTOROLA</option>
                            <option>BLACKBERRY</option>
                            <option>AZUMI</option>
                            <option>ZTE</option>
                            <option>NOKIA</option>
                            <li class="divider"></li>
                            <option>IPAD</option>
                            <option>SAMSUNG_T</option>
                            <li class="divider"></li>
                            <option>IPOD_NANO</option>
                            <option>IPOD_TOUCH</option>
                        </select>
                    </td>
                    <td><input type="number" name="memoria" style="width: 100%"></td>
                    <td><input type="float" name="precio_ini" style="width: 100%"></td>
                    <td>
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input type="submit" name="enviar" value="Enviar" class="button">
                    </td>
                    </tr> 
                
            </table>
            </form>


        </div>

        @include('partials.footer')
        

    </div>
@endsection
    <!--   Core JS Files   -->
    <script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

