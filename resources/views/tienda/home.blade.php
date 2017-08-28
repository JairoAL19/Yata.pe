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
                        margin-left: 5%;
                        width: 90%
                    }
                    #fbpage{
                        width: 40%; 
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
                        margin-left: 5%;
                        width: 60%;
                    }
                    #fbpage{
                        width: 100%; 
                        padding-top: 7%
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
                    #fbpage{
                        width: 100%; 
                        padding-top: 7%
                    }
                }
                .avatar {
                    border-radius: 50%;
                    max-height: 50px;
                    max-width: 50px;
                }
            </style>
            <div style="margin-top: 2%; display: inline-block; float: left; width: 100%; text-align: center">
                <img class="constr" src="/img/proximamente.png" style="width: 70%">
            </div>
            <div id="fbpage" style="display: inline-block; margin-top: 3%; width: 100%; text-align: center;">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/YataPeru" data-tabs="timeline" data-width="450" data-height="470" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/YataPeru" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/YataPeru"></a></blockquote></div>
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

