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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div id="cel" style="display: inline-block; "> 
                                <div style="margin-top: 0%">
                                <img style="width: 100%; margin-top: 5%" src="../../../{{ $celular[0]->foto }}">
                                <b><input id="pago" style="font-size: 120%; margin-top: 2%; text-align: center; width: 100%; border: 0px; background: none; color: green" disabled value="Pago: S/. {{$buen}}"></b>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Caracteríticas</h4>
                            </div>
                            <div class="content">
                                <form action="/Reciclar/Solici" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Marca</label>
                                                <input type="text" class="form-control border-input" name="marca" disabled value="{{ $celular[0]->marca }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Modelo</label>
                                                <input type="text" class="form-control border-input" name="modelo" disabled value="{{ $celular[0]->nombre }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Estado</label>
                                                <select type="text" id="estado" name="estado" class="form-control border-input" onchange="cambiop()">
                                                    <option>Perfecto</option>
                                                    <option selected >Bueno</option>
                                                    <option>Regular</option>
                                                    <option>Malo</option>
                                                    <option>Defectuoso</option>
                                                    <option>Bloqueado</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <script> 
                                        function cambiop(){
                                            if(document.getElementById("estado").value == "Perfecto"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $perf }};
                                                document.getElementById("monto").value =''+{{$perf }};
                                            }if(document.getElementById("estado").value == "Bueno"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $buen }};
                                                document.getElementById("monto").value =''+{{ $buen }};
                                            }if(document.getElementById("estado").value == "Regular"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $regu }};
                                                document.getElementById("monto").value =''+{{ $regu }};
                                            }if(document.getElementById("estado").value == "Malo"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $malo }};
                                                document.getElementById("monto").value =''+{{ $malo }};
                                            }if(document.getElementById("estado").value == "Defectuoso"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $defe }};
                                                document.getElementById("monto").value =''+{{ $defe }};
                                            }if(document.getElementById("estado").value == "Bloqueado"){
                                                document.getElementById("pago").value = 'Pago: S/. '+{{ $bloq }};
                                                document.getElementById("monto").value =''+{{ $bloq }};
                                            }


                                        }
                                    </script>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dirección de entrega</label>
                                                <input type="text" class="form-control border-input" name="direc" placeholder="Ejemplo, Av. Las Artes 850" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>N° Celular</label>
                                                <input type="text" class="form-control border-input" name="telf1" placeholder="Ejemplo, 943695348">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">                                                
                                                <label>Fecha de recojo</label>
                                                <input type="text" class="form-control border-input" name="fecha" placeholder="22/06/2017" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input type="text" class="form-control border-input" name="ciudad" placeholder="Ejemplo, Lima">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        <input type="hidden" name="marca" value="{{ $celular[0]->marca }}" />
                                        <input type="hidden" name="marca" value="{{ $celular[0]->modelo }}" />
                                        <input type="hidden" id="monto" name="monto" value="{{ $buen }}" />
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Reciclar</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h4 style="margin-top: 0%">Estado:</h4>
                        <p style="font-size: 90%"><b>Perfecto</b>: Funciona a la perfección, como si nunca hubiera sido usado. Debe incluir caja original y accesorios.</p>
                        <p style="font-size: 90%"><b>Bueno</b>: Funciones implecables. Poco desgaste y rasgones, tales como rayaduras y rasguños, leves.</p>
                        <p style="font-size: 90%"><b>Regular</b>: Funciones implecables. Desgaste moderado, tales como arañazos, botones desgastados, pinturas gastadas.</p>
                        <p style="font-size: 90%"><b>Malo</b>: Serio desgaste como grietas, numerosos arañazos y rayaduras o abolladuras, pero funciona bien.</p>
                        <p style="font-size: 90%"><b>Defectuoso</b>: Problemas funcionales o físicos que impiden el uso.</p>
                        <p style="font-size: 90%"><b>Bloqueado</b>: Por Icloud, Google o ESN. No se aceptaran celulares reportados como robado</p>
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
    <script src="../../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../../../../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../../../assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="../../../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../../../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="../../../../assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../../assets/js/demo.js"></script>

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
