@extends('app_perfil')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

<!-- <link rel="stylesheet" href="../assets/css/reciclar.css" /> -->
    <div class="main-panel" >
        <nav class="navbar navbar-default" style="background: #8DC538; color: white">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="Tec" style="color: white">Mi Perfil</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content" style="margin-top: 1%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="../assets/img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">{{ Auth::User()->name }}<br />
                                     <a href="#"><small>@ {{ Auth::User()->email }}</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    {{ Auth::User()->about_me }}
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5 style="color: blue">{{ $solici }}<br /><small>Solicitudes</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="color: blue">12<br /><small>Concretado</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5 style="color: green">S/.24,6<br /><small>Ganado</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar Perfil</h4>
                            </div>
                            <div class="content">
                                <form action="/Reciclar/Actualizar_P" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Lugar de trabajo / Estudio</label>
                                                <input type="text" class="form-control border-input" name="trabajo" placeholder="Compañia" value="{{ Auth::user()->trabajo }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Fecha Nacimiento</label>
                                                @if(Auth::user()->fecha_naci == '0000-00-00')
                                                    <input type="text" class="form-control border-input" name="fecha_naci" placeholder="1990/06/17" value="">
                                                @else
                                                    <input type="text" class="form-control border-input" name="fecha_naci" placeholder="1990/06/17" value="{{ Auth::user()->fecha_naci }}">                                                
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo</label>
                                                <input type="email" class="form-control border-input" disabled placeholder="Email"  value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nombre y Apellido</label>
                                                <input type="text" class="form-control border-input" name="name" placeholder="Nombre y Apellido" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input type="text" class="form-control border-input" name="direc" placeholder="Ejemplo, Av. Las Artes sur 615, San Borja - Lima" value="{{ Auth::user()->direc }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input type="text" class="form-control border-input" name="ciudad" placeholder="Ejemplo, Lima" value="{{ Auth::user()->ciudad }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input type="text" class="form-control border-input" name="pais" placeholder="Ejemplo, Perú" value="{{ Auth::user()->pais }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Código Postal</label>
                                                <input type="text" class="form-control border-input" name="zip_code" placeholder="Código Postal" value="{{ Auth::user()->zip_code }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sobre mí</label>
                                                <textarea rows="5" class="form-control border-input" name="about_me" placeholder="Aquí debe ir una descripción tuya" value="">{{ Auth::user()->about_me }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar Perfil</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
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

