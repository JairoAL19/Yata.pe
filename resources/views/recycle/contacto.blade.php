@extends('app_contacto')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
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
                    <a class="navbar-brand" href="Tec" style="color: white">Preguntas o Comentarios</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
                        Hola, {{ Auth::User()->name }} <img class="avatar" src="{{ Auth::User()->avatar }}"> 
                    </ul>
                </div>
            </div>
        </nav>
			<div id="" >
				<div class="container 75%" style="display: inline-block; width: 63%">

					<header class="major last">
						<h2>Formulario de contacto</h2>
					</header>

					<form method="post" action="#">
						<div class="row">
							<div class="6u 12u(mobilep)">
								<input type="text" name="name" placeholder="Nombre" value="{{Auth::User()->name}}" />
							</div>
							<div class="6u 12u(mobilep)">
								<input type="email" name="email" placeholder="Correo" value="{{Auth::User()->email}}" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" placeholder="Mensaje, máximo 1500 letras" rows="6" maxlength="1500"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Enviar Mensaje" /></li>
								</ul>
							</div>
						</div>
					</form>

					<ul class="icons" style="margin-left: 25%;" >
						<li><a href="#" class="icon fa-twitter" style="font-size: 30px"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook" style="font-size: 30px"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram" style="font-size: 30px"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github" style="font-size: 30px"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble" style="font-size: 30px"><span class="label">Dribbble</span></a></li>
					</ul>
				</div>
				<style> a{ font-size: 60% }</style>
				<div class="preguntas" style="width: 35%; display: inline-block; padding: 1%">
					<h5 style="font-size: 90%;">Preguntas Frecuentes</h5>
					<li><a href="#Terminos">¿Cuáles son sus términos y condiciones?</a></li>
					<li><a href="#TipoTelefonos">¿Qué tipo de teléfono compramos?</a></li>
					<li><a href="#RecibirePago">¿Cuando recibiré el pago?</a></li>
					<li><a href="#IMEI">¿Cómo puedo encontrar mi número de IMEI?</a></li>
					<li><a href="#MisDatosDispositivo">¿Qué pasa con los datos de mi dispositivo electrónico?</a></li>
					<li><a href="#MisDatosPorInternet">¿Es seguro enviar mis datos por Internet?</a></li>
					<li><a href="#ArticulosRobados">¿Aceptan dispositivos electrónicos robados?</a></li>
					<li><a href="#LimiteVenta">¿Hay un límite máximo de dispositivos que puedo vender?</a></li>
					<li><a href="#DispositivoNoEnLista">¿Por qué no aparece mi dispositivo electrónico en la lista?</a></li>
					<li><a href="#Marca&Modelo">¿Cómo puedo saber la marca y modelo?</a></li>
					<li><a href="#Bateria&Cargador">¿Qué pasa si la batería está descargada?</a></li>
					<li><a href="#PagoDefectuoso">¿Puedo obtener dinero si el dispositivo electrónico no funciona?</a></li>
					<li><a href="#Funcional">¿Qué se entiende por dispositivo electrónico que funciona?</a></li>
					<li><a href="#Envio">¿Cómo envío mi dispositivo electrónico a Yata?</a></li>
				</div>
			</div>
</div>

@endsection
    <script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/skel.min.js"></script>
	<script src="/assets/js/util.js"></script>
	<script src="/assets/js/main.js"></script>
	<script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/js/demo.js"></script>

