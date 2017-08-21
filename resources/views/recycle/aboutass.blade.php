@extends('app_aboutass')

@section('htmlheader_title')
    Home
    header("Cache-Control: no-cache, must-revalidate");
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
                    <a class="navbar-brand" href="Tec" style="color: white">Sobre Nosotros</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        Hola, {{ Auth::User()->name }} <img class="avatar_top" src="{{ Auth::User()->avatar }}"> 
                    </ul>

                </div>
            </div>
        </nav>

        <style> 
            input[type="file"] {
                display: none;
            }
            .avatar_top {
                border-radius: 50%;
                max-height: 50px;
                max-width: 50px;
            }
        </style>
        <link rel="stylesheet" href="/assets/css/main3.css" />
        <div class="content" style="margin-top: 0%">
            <div id="main" style="margin-top: 0px; padding-top: 2%">
				<div>
					<section class="feature left">
						<a class="image icon fa-recycle"><img src="/images/sobre2.jpg" alt="" /></a>
						<div class="content">
							<h3>Lo principal de YATA</h3>
							<p style="text-align: justify;">Es el primer portal ReCommerce del Perú, nuestro objetivo principal es lograr que nuestros clientes obtengan recompensas por reciclar sus objetos que ya no usan, ayudando al medio ambiente y a sus bolsillos.</p>
						</div>
					</section>
					<section class="feature right">
						<a class="image icon fa-truck"><img src="/images/pic02.jpg" alt="" /></a>
						<div class="content">
							<h3>Seguridad en su entrega</h3>
							<p style="text-align: justify;">Nos preocupamos en la seguridad de nuestros clientes, es por ese motivo que YATA llega a todo Lima sin cargo alguno, usted no tendrá que acercarse a lugares peligrosos ni con compradores desconocidos.</p>
						</div>
					</section>
					<section class="feature left">
						<a class="image icon fa-mobile"><img src="/images/pic03.jpg" alt="" /></a>
						<div class="content">
							<h3>The Third Thing</h3>
							<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
						</div>
					</section>
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

