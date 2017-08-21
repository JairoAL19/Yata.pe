@extends('app_tienda')

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
                    <a class="navbar-brand" href="Tec" style="color: white">Web Shop</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        Hola, {{ Auth::User()->name }} <img class="avatar" src="{{ Auth::User()->avatar }}"> 
                    </ul>

                </div>
            </div>
        </nav>

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
                    .constr{
                        margin-left: 15%;
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
                    .constr{
                        margin-left: 15%;
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
                    .constr{
                        margin-top: 5%;
                        margin-left: 0px;
                        width: 100%;
                    }   
                }
                .avatar {
                    border-radius: 50%;
                    max-height: 50px;
                    max-width: 50px;
                }
            </style>
            <div style="margin-top: 2%" >
                <img class="constr" src="/img/construccion.jpg">
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

