@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

<!-- <link rel="stylesheet" href="../assets/css/reciclar.css" /> -->
    <div class="main-panel" >
        <nav class="navbar navbar-default" style="background: #FFA41A; color: white">
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


        <div class="content" id="bg" >
            <!--
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Celulares</p>
                                            $1,345
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Ipad y Tablet</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-twitter-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Reproductores</p>
                                            +45
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <style>
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
            </style>
            <div class="CATEGORIAS" style="margin-top: 2%">
                <div id="celular" class="boton" style="display: inline-block">                
                    <div style="margin-top: 3%">   
                    <a href="Celulares">             
                    <img href="hola" style="width: 40%; height: 85%" src="../../img/celulares.png">
                    <label style="font-size: 120%">CELULARES</label>
                    </a>
                    </div>
                </div>
                <div id="celular" class="boton" style="display: inline-block">                
                    <div style="margin-top: 3%">   
                    <a href="Celulares">             
                    <img href="hola" style="width: 40%; height: 85%" src="../../img/tablet.jpg">
                    <label style="font-size: 120%">IPAD y TABLET</label>
                    </a>
                    </div>
                </div>
                <div id="celular" class="boton" style="display: inline-block">                
                    <div style="margin-top: 3%">   
                    <a href="Celulares">             
                    <img href="hola" style="width: 40%; height: 85%" src="../../img/ipod.jpg">
                    <label style="font-size: 120%">REPRODUCTORES</label>
                    </a>
                    </div>
                </div>
            </div>
            <div class="ABOUTAS" style="margin-top: 8%">
                <div id="" class="boton" style="width: 20%; display: inline-block; margin-left: 2%; float: left;" >                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                        <img style="display: inline-block;" src="../../img/icon.png">
                        <p style="display: inline-block;">Sobre nosotros</p>
                    </div>
                    <div style="margin-top: 5%; text-align: justify;">   
                        Yata.pe es el servicio de reCommerce más fácil, rápido y ecológico para ayudarle a reciclar sus productos electrónicos usados. Ya sea que quieras reciclar tu iPhone, iPad, Samsung u otros productos electrónicos, Yata.pe te ayuda.
                    </div>
                </div>
                <div id="" class="boton" style="width: 20%; display: inline-block; margin-left: 3%; float: left;">                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/reciclar.png">
                    <p style="display: inline-block;">¿Qué puedo reciclar?</p>
                    </div>
                    <div style="margin-top: 5%; text-align: justify;">   
                        Usted puede reciclar Celulares, Ipd, Tablets, reproductores, entre otros productos que ya no use, Yata.pe se encarga de repararlo y darlo a otro usuario a un precio muy accesible. Recicla tu articulo hoy.
                    </div>
                </div>
                <div id="" class="boton" style=" border: 0px solid black; width: 20%; display: inline-block; margin-left: 3%; float: left;">                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/sun.png">
                    <p style="display: inline-block;">¿Cómo funciona?</p>
                    </div>
                    <div style="margin-top: 5%">   
                        Llegamos a su ubicación, Su teléfono móvil u otro aparato electrónico usado ​​se inspeccionan para asegurarse de que su estado coincide con su evaluación. El pago se reliza al momento de dar la conformidad por nuestro courier.
                    </div>
                </div>
                <div id="" class="boton" style=" border: 0px solid black; width: 20%; display: inline-block; margin-left: 3%; float: left;">                
                    <div style="border-bottom: 1px solid gray; padding-bottom: 10px">   
                    <img style="display: inline-block;" src="../../img/motorcycle.png">
                    <p style="display: inline-block;">Rapido y Seguro</p>
                    </div>
                    <div style="margin-top: 5%">   
                        Eliminamos todos los datos de cada artículo que recibimos para garantizar su completa privacidad y tranquilidad. Hacemos la experiencia segura informando cada paso que realizamos en nuestra AppWeb, trabajamos para usted.
                    </div>
                </div>
            </div>

        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>
