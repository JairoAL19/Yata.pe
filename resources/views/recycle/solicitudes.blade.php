@extends('app_solicitudes')

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
                    <a class="navbar-brand" href="/Reciclar/Tec" style="color: white">Solicitudes</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>
        <div class="content" id="bg" >

            <style>
                @media screen and (max-width: 1680px) {
                    #cel{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px outset #d4d4d4;       
                        width: 18%;
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
                        width: 47%;
                        background: white;    
                        padding: 1%;      
                        margin-left: 2%;
                        margin-bottom: 2%;
                    }                    
                }

            </style>
            <div class="CATEGORIAS1" style="margin-top: 2%">
                @foreach($solicitudes as $solicitud)
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    @foreach($celulares as $cel)
                        @if($solicitud->cod_produc == $cel->nombre)
                            <img style="width: 100%; " src="../../{{ $cel->foto }}">
                            <label style="font-size: 100%; margin-top: 8%; text-align: center; width: 100%">{{$cel->nombre}}</label>
                        @endif
                    @endforeach
                    <b><p style="font-size: 14px; width: 100%;text-align: center;">Fecha: {{ $solicitud->fecha_r }}</p></b>
                    <b><p style="font-size: 14px; width: 100%;text-align: center; color: green">Pago: S/.{{ $solicitud->precio_fin }}</p></b>
                    <b><p style="font-size: 14px; width: 100%;text-align: center;">Estado: {{ $solicitud->estado }}</p></b>
                    <b><p style="font-size: 12px; width: 100%;text-align: center;">Metodo Pago: {{ $solicitud->metodo_p }}</p></b>
                    @if($solicitud->courier == 'Pendiente')
                        <b><p style="font-size: 12px; width: 100%;text-align: center;">Courier: <b style="color: red">{{ $solicitud->courier }}</b></p></b>
                    @else
                         <b><p style="font-size: 12px; width: 100%;text-align: center;">Courier: <b style="color: green">{{ $solicitud->courier }}</b></p></b>
                    @endif
                    @if($solicitud->courier == 'Pendiente')
                        <a onClick="confirmation({{$solicitud->id}})">                    
                            <button class="btn btn-warning" name="Cancelar" id="confirma" value="{{$solicitud->id}}" style="width: 100%; text-align: center;">Cancelar Solicitud</button>                    
                        </a>
                    @else
                        <button class="btn btn-success" name="Solicitud Aceptada" id="confirma" value="{{$solicitud->id}}" style="width: 100%; text-align: center;">Solicitud Aceptada</button>
                    @endif
                    <script>
                        function  confirmation($cod){
                            if(confirm('¿Estas seguro que vas a cancelar esta Solicitud?')){
                                location.href='/Reciclar/Cancelar/'+$cod;
                            }
                        }
                    </script>
                    </div>                    
                </div>
                @endforeach
            </div>
            </br>
            *Solo se puede cancelar una solicitud de reciclado mientras el courier no haya sido asignado (Estado: Pendiente). Una vez fue asignado si desea cancelar el recojo de su articulo tendrá que llamar al (01)222-2222, indicando el motivo.
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
