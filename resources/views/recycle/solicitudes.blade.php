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
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                            Hola, {{ Auth::User()->name }} <img class="avatar_top" src="{{ Auth::User()->avatar }}"> 
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
                        width: 17%;
                        background: white;    
                        padding: 1%;      
                        margin-left: 2%;
                        margin-bottom: 2%;
                    }
                    #buttonreci{
                        width: 25%; margin-left: 40%; margin-bottom: 2%;
                    }#preci{
                        font-size: 30px;
                    }#imgreci{
                        width: 70%; margin-left: 15%
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
                    #buttonreci{
                        width: 40%; margin-left: 30%; 
                    }#preci{
                        font-size: 100%;
                    }#imgreci{
                        width: 77%;
                    }#divreci{
                        margin-top: 10%;
                        margin-bottom: 5%;
                    }         
                }
                .avatar_top {
                    border-radius: 50%;
                    max-height: 50px;
                    max-width: 50px;
                }

            </style>
            <div class="CATEGORIAS1" style="margin-top: 2%">
                @if(count($data) != 0)
                @foreach($data as $dato)                
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <img style="width: 100%; " src="../../{{ $dato->foto }}">
                    <label style="font-size: 100%; margin-top: 8%; text-align: center; width: 100%">{{$dato->nombre}}</label>
                    <b><p style="font-size: 14px; width: 100%;text-align: center;">Fecha: {{ $dato->fecha_r }}</p></b>
                    <b><p style="font-size: 14px; width: 100%;text-align: center; color: green">Pago: S/.{{ $dato->precio_fin }}</p></b>
                    <b><p style="font-size: 14px; width: 100%;text-align: center;">Estado: {{ $dato->estado }}</p></b>
                    <b><p style="font-size: 12px; width: 100%;text-align: center;">Metodo Pago: {{ $dato->metodo_p }}</p></b>
                    @if($dato->courier == 'Pendiente')
                        <b><p style="font-size: 12px; width: 100%;text-align: center; font-size: 80%">Courier: <b style="color: red">{{ $dato->courier }}</b></p></b>
                    @else
                        @if($dato->act == 'I')
                         <b><p style="width: 100%;text-align: center; font-size: 80%">Courier: <b style="color: green">Cancelado</b></p></b>   
                        @else                            
                         <b><p style="width: 100%;text-align: center; font-size: 80%">Courier: <b style="color: green">{{ $dato->courier }}</b></p></b>
                        @endif
                    @endif
                    @if($dato->courier == 'Pendiente')
                        <a onClick="confirmation({{$dato->id}})">                    
                            <button class="btn btn-warning" name="Cancelar" id="confirma" value="{{$dato->id}}" style="width: 100%; text-align: center;">Cancelar Solicitud</button>                    
                        </a>
                    @elseif($dato->act == 'T')
                        <label class="btn-termi" value="Solicitud Aceptada" style="width: 100%; text-align: center; color: #2686ed">Terminado</label>
                    @elseif($dato->act == 'I')
                        <label class="btn-cance" value="Solicitud Cancelada" style="width: 100%; text-align: center; color: #f53434">Cancelado</label>
                    @else
                        <label class="btn-ace" value="Solicitud Aceptada" style="width: 100%; text-align: center; color: #3ed104">Aceptado</label>                        
                    @endif
                    <style>
                        .btn-ace{
                            border-radius: 124px 124px 124px 124px;
                            -moz-border-radius: 124px 124px 124px 124px;
                            -webkit-border-radius: 124px 124px 124px 124px;
                            border: 2px solid #3ed104;
                            padding: 7px 18px;
                        }     
                        .btn-cance{
                            border-radius: 124px 124px 124px 124px;
                            -moz-border-radius: 124px 124px 124px 124px;
                            -webkit-border-radius: 124px 124px 124px 124px;
                            border: 2px solid #f53434;
                            padding: 7px 18px;
                        }     
                        .btn-termi{
                            border-radius: 124px 124px 124px 124px;
                            -moz-border-radius: 124px 124px 124px 124px;
                            -webkit-border-radius: 124px 124px 124px 124px;
                            border: 2px solid #2686ed;
                            padding: 7px 18px;
                        }                   
                    </style>
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
                @else
                <div id="divreci">
                    <img src="/img/aunno.png" id="imgreci">
                </div>
                    <a href="/Reciclar/Tec"><button class="btn btn-info active" id="buttonreci"><p id="preci"><b>Reciclar ahora</b></p></button></a>
                @endif
            </div>
            </br>
            <p style="margin-bottom: 15px; margin-left: 15px; text-align: justify; font-size: 90%">
                *Solo se puede cancelar una solicitud de reciclado mientras el courier no haya sido asignado (Estado: Pendiente). Una vez fue asignado si desea cancelar el recojo de su articulo tendrá que comunicarse por mensajería, indicando el motivo.</br></br>
                *Solo se muestran las solicitudes con un rango máximo de 30 días desde su fecha de registro.</br></br>
                *Si su pedido fue cancelado sin su concentimiento o autorización por favor comuniquesé con nosotros mediante el chat o el formulario de contacto.
            </p>
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
