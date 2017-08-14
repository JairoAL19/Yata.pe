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
                    <a class="navbar-brand" href="Tec" style="color: white">Recicla Ganando Dinero</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        Hola, {{ Auth::User()->name }} <img class="avatar" src="{{ Auth::User()->avatar }}"> 
                    </ul>

                </div>
            </div>
        </nav>

        <ul id="progressbar" style="text-align: center; margin-top: 2%">
            <li class="active" style="color: black; ">Selecciona</li>
            <li style="color: black; ">Marca</li>
            <li style="color: black; ">Modelo</li>
            <li style="color: black; ">Estado</li>
        </ul>

        <div class="content" id="bg" >

            <style>                
                @media screen and (max-width: 1680px) {
                    #celular{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px inset #d4d4d4; 
                        width: 30%;
                        background: white;       
                        margin-left: 2%;   
                        height: 167px;
                    }
                    #info{
                        width: 20%;
                    } 
                    #infotext{
                        margin-top: 5%;

                    } 
                    #celub2{
                        margin-top: 3%;
                    }    
                    .ABOUTAS{
                        margin-top: 8%
                    }  
                }
                @media screen and (max-width: 1280px) {
                    #celular{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px inset #d4d4d4; 
                        width: 95%;
                        background: white;       
                        margin-left: 2%;   
                        height: 167px;
                        margin-bottom: 1%;
                    }                 
                    #info{
                        width: 95%;
                    }
                    #infotext{
                        margin-top: 2%;
                        width: 100%;
                    }     
                    #celub2{
                        margin-top: 1%;
                    }    
                    .ABOUTAS{
                        margin-top: 2%
                    }  

                }
                @media screen and (max-width: 768px) {
                    #celular{
                        border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        -webkit-border-radius: 10px 10px 10px 10px;
                        border: 8px inset #d4d4d4; 
                        width: 95%;
                        background: white;       
                        margin-left: 2%;   
                        height: 150px;
                        margin-bottom: 1%;
                    }  
                    #info{
                        width: 93%;
                    }
                    #infotext{
                        margin-top: 2%;
                        width: 100%;
                    }   
                    #celub2{
                        margin-top: 3%;
                    }
                    .ABOUTAS{
                        margin-top: 2%
                    }    
                }
                .avatar {
                    border-radius: 50%;
                    max-height: 50px;
                    max-width: 50px;
                }
            </style>
            <div class="CATEGORIAS" style="margin-top: 2%">
                <div id="celular" class="boton" style="display: inline-block">                
                    <div id="celub2" style="">   
                    <a href="Celulares">             
                    <img style="width: 40%; height: 85%;margin-left: 5%" src="../../img/celulares.png">
                    <label style="font-size: 120%">CELULARES</label>
                    </a>
                    </div>
                </div>
                <div id="celular" class="boton" style="display: inline-block">                
                    <div id="celub2" style="">   
                    <a href="Celulares">             
                    <img style="width: 40%; height: 85%;margin-left: 5%" src="../../img/tablet.jpg">
                    <label style="font-size: 120%">IPAD Y TABLET</label>
                    </a>
                    </div>
                </div>
                <div id="celular" class="boton" style="display: inline-block">                
                    <div id="celub2" style="">   
                    <a href="Celulares">             
                    <img style="width: 40%; height: 85%;margin-left: 5%" src="../../img/ipod.jpg">
                    <label style="font-size: 120%">REPRODUCTORES</label>
                    </a>
                    </div>
                </div>
            </div>
            <div class="ABOUTAS">
                <div id="info" class="boton" style="display: inline-block; margin-left: 2%; float: left;" >           
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                        <img style="display: inline-block;" src="../../img/icon.png">
                        <p style="display: inline-block;">Sobre nosotros</p>
                    </div>
                    <div id="infotext" style=" text-align: justify;">   
                        Yata.pe es el servicio de reCommerce más fácil, rápido y ecológico para ayudarle a reciclar sus productos electrónicos usados. Ya sea que quieras reciclar tu iPhone, iPad, Samsung u otros productos electrónicos, Yata.pe te ayuda.
                    </div>
                </div>
                <div id="info" class="boton" style="display: inline-block; margin-left: 3%; float: left;">            
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/reciclar.png">
                    <p style="display: inline-block; font-size: 90%">¿Qué puedo reciclar?</p>
                    </div>
                    <div id="infotext" style="text-align: justify;">   
                        Usted puede reciclar Celulares, Ipod, Tablets, reproductores, entre otros productos que ya no use, Yata.pe se encarga de repararlo y darlo a otro usuario a un precio muy accesible. Recicla tu articulo hoy.
                    </div>
                </div>
                <div id="info" class="boton" style=" border: 0px solid black; display: inline-block; margin-left: 3%; float: left;">                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/sun.png">
                    <p style="display: inline-block;">¿Cómo funciona?</p>
                    </div>
                    <div id="infotext" style="text-align: justify;">   
                        Llegamos a su ubicación, Su teléfono móvil u otro aparato electrónico usado ​​se inspeccionan para asegurarse de que su estado coincide con su evaluación. El pago se reliza al momento de dar la conformidad por nuestro courier.
                    </div>
                </div>
                <div id="info" class="boton" style=" border: 0px solid black;display: inline-block; margin-left: 3%; float: left;">                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/motorcycle.png">
                    <p style="display: inline-block;">Rapido y Seguro</p>
                    </div>
                    <div id="infotext" style="text-align: justify;">   
                        Eliminamos todos los datos de cada artículo que recibimos para garantizar su completa privacidad y tranquilidad. Hacemos la experiencia segura informando cada paso que realizamos en nuestra AppWeb, trabajamos para usted.
                    </div>
                </div>
            </div>

        </div>

        @include('partials.footer')
        

    </div>
@endsection
    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

