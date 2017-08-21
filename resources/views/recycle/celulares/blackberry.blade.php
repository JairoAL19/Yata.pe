@extends('app')

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
                    <a class="navbar-brand" href="/Reciclar/Tec" style="color: white">¿Qué voy a reciclar?</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        {{ Auth::User()->name }} <img class="avatar" src="{{ Auth::User()->avatar }}"> 
                    </ul>

                </div>
            </div>
        </nav>
        <link href="/css/progressbar.css" rel="stylesheet"/>
        <ul id="progressbar" style="text-align: center; margin-top: 2%">
            <li class="active" style="color: black; ">Selecciona</li>
            <li class="active" style="color: black; ">Marca</li>
            <li class="active" style="color: black; ">Modelo</li>
            <li style="color: black; ">Estado</li>
        </ul>

        <div class="content" id="bg" >

            <style>
                @media screen and (max-width: 1680px) {
                    #cel{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px outset #d4d4d4;       
                        width: 17%;
                        background: white;    
                        padding: 1%;      
                        margin-left: 2%;
                        margin-bottom: 2%;
                    }
                }
                @media screen and (max-width: 1280px) {
                    #cel{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px outset #d4d4d4;       
                        width: 46%;
                        background: white;    
                        padding: 1%;      
                        margin-left: 2%;
                        margin-bottom: 2%;
                    }                    
                }
                .avatar {
                    border-radius: 50%;
                    max-height: 50px;
                    max-width: 50px;
                }

            </style>
            <div class="CATEGORIAS1" style="margin-top: 2%">
                @foreach($celular as $cel)
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/P/{{ $cel->cod_produc }}">
                    <img style="width: 100%; " src="../../{{ $cel->foto }}">
                    <label style="font-size: 100%; margin-top: 8%; text-align: center; width: 100%">{{$cel->nombre}}</label>
                    <label style="font-size: 80%; margin-top: 2%; text-align: center; width: 100%; color: green">S/.{{$cel->precio_ini}}</label>
                    </a>
                    </div>
                </div>
                @endforeach
            </div>

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
