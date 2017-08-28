@extends('app_testimonios')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link href="/css/progressbar.css" rel="stylesheet"/>
<link rel="stylesheet" href="/assets/css/main4.css" />
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
                    <a class="navbar-brand" href="Tec" style="color: white">Testimonios</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        Hola, {{ Auth::User()->name }} <img class="avatar" src="{{ Auth::User()->avatar }}"> 
                    </ul>
                    <style>                        
                        .avatar {
                            border-radius: 50%;
                            max-height: 50px;
                            max-width: 50px;
                        }
                    </style>
                </div>
            </div>
        </nav>

        <div class="content" id="bg" >
            <section id="two" class="wrapper2" style="margin-top: 1%; padding-top: 2%">
                <div class="inner alt">
                    <section class="spotlight">
                        <div class="image"><img src="/images/pic01.jpg" alt="" /></div>
                        <div class="content">
                            <h3>Magna sed ultrices</h3>
                            <p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image"><img src="/images/pic02.jpg" alt="" /></div>
                        <div class="content">
                            <h3>Ultrices nullam aliquam</h3>
                            <p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image"><img src="/images/pic03.jpg" alt="" /></div>
                        <div class="content">
                            <h3>Aliquam sed magna</h3>
                            <p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
                        </div>
                    </section>
                </div>
            </section>            

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

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

