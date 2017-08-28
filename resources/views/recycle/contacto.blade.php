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
				<div id="formulario" class="container 75%" style="display: inline-block">					
					<header class="major last">
						<h2 style="margin-bottom: 3%">Formulario de contacto</h2>
					</header>
					@if(Session::has('flash_message'))
						<div style="background: #3ED011; text-align: center; color: white; margin-bottom: 2%">
						{{Session::get('flash_message')}}
						</div>
					@endif
					<form method="post" action="Contacto_mensaje">
						<div class="row">
							<div class="6u 12u(mobilep)">
								<input type="text" name="name" required placeholder="Nombre" style="background: white; text-align: center;" value="{{Auth::User()->name}}" />
							</div>
							<div class="6u 12u(mobilep)">
								<input type="email" name="email" required placeholder="Correo" style="background: white; text-align: center;" value="{{Auth::User()->email}}" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="mensaje" required placeholder="Mensaje, máximo 1500 letras" style="background: white;" rows="6" maxlength="1500"></textarea>
							</div>
						</div>
						<input type="hidden" name="cod_user" value="{{ Auth::User()->id }}" />
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Enviar Mensaje" /></li>
								</ul>
							</div>
						</div>
					</form>

					<ul class="icons"" >
						<li><a href="#" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="http://facebook.com/Yata.pe" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
					</ul>
				</div>
				<div id="text" class="container 75%" style=" width: 63%; display: none">
					
				</div>
				<style> 
					@media screen and (max-width: 2080px) {
						#formulario{ width: 63%; }
						a{ font-size: 60% }
						.icons{ margin-left: 24%; }
						.icons a{ font-size: 30px; }
	                }
					@media screen and (max-width: 1680px) {
						#formulario{ width: 63%; }
						a{ font-size: 60% }
						.icons{ margin-left: 24%; }
						.icons a{ font-size: 30px; }
	                }
	                @media screen and (max-width: 1480px) {
	                	#formulario{ width: 63%; }
						a{ font-size: 55% }
						.icons{ margin-left: 20%; }
						.icons a{ font-size: 30px; }
	                }
	                @media screen and (max-width: 1280px) {
	                	a{ font-size: 40% }
	                	.icons{ margin-left: 24%; }
	                	.icons a{ font-size: 30px; }
	                }
	                @media screen and (max-width: 1280px) {
	                	a{ font-size: 35% }
	                	.icons{ margin-left: 0%; }                	
	                	.icons a{ font-size: 30px; }
	                }
	                @media screen and (max-width: 768px) {
	                	.preguntas{ display: none }
	                	#formulario{ width: 100%; }
	                	.icons{ margin-left: 0%; }
	                	.icons a{ font-size: 20px; }
	                }
				</style>
				<div class="preguntas" style="width: 35%; float: right; padding: 1%">
					<h5 style="font-size: 90%;">Preguntas Frecuentes</h5>
					<li><a href="#Terminos" onclick="terminos()">¿Cuáles son sus términos y condiciones?</a></li>
					<li><a href="#TipoTelefonos" onclick="TipoTelefonos()">¿Qué tipo de teléfono compramos?</a></li>
					<li><a href="#RecibirePago" onclick="RecibirePago()">¿Cuando recibiré el pago?</a></li>
					<li><a href="#IMEI" onclick="IMEI()">¿Cómo puedo encontrar mi número de IMEI?</a></li>
					<li><a href="#MisDatosDispositivo" onclick="MisDatosDispositivo()">¿Qué pasa con los datos de mi dispositivo electrónico?</a></li>
					<li><a href="#MisDatosPorInternet" onclick="MisDatosPorInternet()">¿Es seguro enviar mis datos por Internet?</a></li>
					<li><a href="#ArticulosRobados" onclick="ArticulosRobados()">¿Aceptan dispositivos electrónicos robados?</a></li>
					<li><a href="#LimiteVenta" onclick="LimiteVenta()">¿Hay un límite máximo de dispositivos que puedo vender?</a></li>
					<li><a href="#DispositivoNoEnLista" onclick="DispositivoNoEnLista()">¿Por qué no aparece mi dispositivo electrónico en la lista?</a></li>
					<li><a href="#Marca&Modelo" onclick="MarcaModelo()">¿Cómo puedo saber la marca y modelo?</a></li>
					<li><a href="#Bateria&Cargador" onclick="BateriaCargador()">¿Qué pasa si la batería está descargada?</a></li>
					<li><a href="#PagoDefectuoso" onclick="PagoDefectuoso()">¿Puedo obtener dinero si el dispositivo electrónico no funciona?</a></li>
					<li><a href="#Funcional" onclick="Funcional()">¿Qué se entiende por dispositivo electrónico que funciona?</a></li>
					<li><a href="#Envio" onclick="Envio()">¿Cómo envío mi dispositivo electrónico a Yata?</a></li>
				</div>
			</div>
			@include('partials.footer')
</div>
<textarea style="display: none" id="terminos">@include('partials.preguntas.terminos')</textarea>
<textarea style="display: none" id="TipoTelefonos">@include('partials.preguntas.tipotelefonos')</textarea>
<textarea style="display: none" id="RecibirePago">@include('partials.preguntas.recibirepago')</textarea>
<textarea style="display: none" id="IMEI">@include('partials.preguntas.imei')</textarea>
<textarea style="display: none" id="MisDatosDispositivo">@include('partials.preguntas.misdatosdispositivo')</textarea>
<textarea style="display: none" id="MisDatosPorInternet">@include('partials.preguntas.misdatosinternet')</textarea>
<textarea style="display: none" id="ArticulosRobados">@include('partials.preguntas.articulosrobados')</textarea>
<textarea style="display: none" id="LimiteVenta">@include('partials.preguntas.limiteventa')</textarea>
<textarea style="display: none" id="DispositivoNoEnLista">@include('partials.preguntas.dispositivonoenlista')</textarea>
<textarea style="display: none" id="MarcaModelo">@include('partials.preguntas.marcamodelo')</textarea>
<textarea style="display: none" id="BateriaCargador">@include('partials.preguntas.bateriacargador')</textarea>
<textarea style="display: none" id="PagoDefectuoso">@include('partials.preguntas.pagodefectuoso')</textarea>
<textarea style="display: none" id="Funcional">@include('partials.preguntas.funcional')</textarea>
<textarea style="display: none" id="Envio">@include('partials.preguntas.envio')</textarea>
<script src="/assets/js/scripts_preguntas.js"></script>
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

