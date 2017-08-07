@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link href="/css/progressbar.css" rel="stylesheet"/>
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
                    <a class="navbar-brand" href="Tec" style="color: white">¿Qué voy a reciclar?</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>
        <style>                
                @media screen and (max-width: 1680px) {
                    p{
                        display: inline-block;
                    }
                }
                @media screen and (max-width: 1280px) {
                    #text{
                        font-size: 100%;
                    }

                }
                @media screen and (max-width: 768px) {
                    #text{
                        font-size: 90%;
                        width: 90%;
                    }
                }
            </style>
        <link href="/css/freelancer.css" rel="stylesheet">
        <div class="content" id="bg" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Felicidades</h2>
                    <hr class="star-primary">                    
                    <p id="text" style="display: inline-block;">Tu solicitud fue registrada satisfactoriamente. Puedes ver tus solicitud en la opción "Solicitudes". Un courier se acercará el día {{ $data->fecha_r }} a recoger el {{ $data->cod_produc }}, comproborá que la condición del producto sea {{ $data->estado }}. El pago de S/.{{ $data->precio_fin}} se realizará despues de la verificación, Gracias por usar Yata.pe y ayudar a un mundo mejor.</p></br>
                    <p>Cliente: <b style="color: green">{{ $usuario }} </b></p>
                    <p>Fecha: <b style="color: green">{{ $data->created_at }} </b></p>
                    <p>Servicio: <b style="color: green">Web Recycle</b></p></br>
                    <img style="width: 30%; " src="/img/courier.jpg">
                </div>
            </div>
        </div>
        @include('partials.footer')

    </div>
@endsection
    <!--   Core JS Files   -->
    <script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/js/demo.js"></script>

