@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link href="/css/progressbar.css" rel="stylesheet"/>
<!-- <link rel="stylesheet" href="../assets/css/reciclar.css" /> -->
    <div class="main-panel" >
        <nav class="navbar navbar-default" style="background: #348CB2; color: white">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="/Reciclar/Tec" style="color: white">Selecciona Marca</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>
        <ul id="progressbar" style="text-align: center; margin-top: 2%">
            <li class="active" style="color: black; ">Selecciona</li>
            <li class="active" style="color: black; ">Marca</li>
            <li style="color: black; ">Modelo</li>
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
            </style>
            <div class="CATEGORIAS1" style="margin-top: 2%">
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Iphone/P">
                    <img style="width: 100%; " src="../../img/celulares/iphone.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">IPhone</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Samsung/P">
                    <img style="width: 100%; " src="../../img/celulares/samsung.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">Samsung</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/HTC/P">
                    <img style="width: 100%; " src="../../img/celulares/htc.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">HTC</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Huawei/P">
                    <img style="width: 100%; " src="../../img/celulares/huawei.png">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">Huawei</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Motorola/P">
                    <img style="width: 100%; " src="../../img/celulares/moto.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">Motorola</label>
                    </a>
                    </div>                    
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/LG/P">
                    <img style="width: 100%; " src="../../img/celulares/lg.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">LG</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/ZTE/P">
                    <img style="width: 100%; " src="../../img/celulares/zte.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">ZTE</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Azumi/P">
                    <img style="width: 100%; " src="../../img/celulares/azumi.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">Azumi</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/Nokia/P">
                    <img style="width: 100%; " src="../../img/celulares/nokia.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">Nokia</label>
                    </a>
                    </div>
                </div>
                <div id="cel" style="display: inline-block; "> 
                    <div style="margin-top: 0%">
                    <a href="/Reciclar/BlackBerry/P">
                    <img style="width: 100%; " src="../../img/celulares/bb.jpg">
                    <label style="font-size: 20px; margin-top: 8%; text-align: center; width: 100%">BlackBerry</label>
                    </a>
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
