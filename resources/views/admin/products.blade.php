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
            <button style="margin-top: 1%; margin-bottom: 1%" type="button" class="btn btn-success"><b>Agregar</b></button>
            <table class="table table-bordered">
                <tr>
                    <td>N°</td>
                    <td>Nombre</td>
                    <td>Código</td>
                    <td>Marca</td>
                    <td>Memoria</td>
                    <td>foto</td>
                    <td>Precio Perfecto</td>
                </tr>
                @foreach($product as $producto)
                    <tr>
                        <td>{{ $cont++ }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cod_produc}}</td>
                        <td>{{ $producto->marca}}</td>
                        <td>{{ $producto->memoria}}</td>
                        <td><img style="width: 64px; height: 64px" src="../../{{$producto->foto}}"></td>
                        <td>S/. {{ $producto->precio_ini}}</td>
                    </tr>
                 @endforeach   
                
            </table>


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

