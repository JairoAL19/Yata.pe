@extends('app')

@section('htmlheader_title')
    Home

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
                    <a class="navbar-brand" href="/Reciclar/Tec" style="color: white">Estado del Articulo</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">
                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>
        <link href="/css/progressbar.css" rel="stylesheet"/>
        <ul id="progressbar" style="text-align: center; margin-top: 2%">
            <li class="active" style="color: black; ">Selecciona</li>
            <li class="active" style="color: black; ">Marca</li>
            <li class="active" style="color: black; ">Modelo</li>
            <li class="active" style="color: black; ">Estado</li>
        </ul>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div id="cel" style="display: inline-block; "> 
                                <div style="margin-top: 0%">
                                <img style="width: 100%; margin-top: 5%" src="../../../{{ $celular[0]->foto }}">
                                <b><input id="pago" style="font-size: 130%; margin-top: 2%; margin-bottom: 2%; text-align: center; width: 100%; border: 0px; background: none; color: green" disabled value="Pago: S/. {{$buen}}"></b>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="content">
                                <form action="/Reciclar/Solici" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Marca</label>
                                                <input type="text" class="form-control border-input" name="marca" disabled value="{{ $celular[0]->marca }}" style="background: #fffcf5">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Modelo</label>
                                                <input type="text" class="form-control border-input" name="modelo" disabled value="{{ $celular[0]->nombre }}" style="background: #fffcf5">
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
                                                <input type="text" class="form-control border-input" required name="direc" placeholder="Ejemplo, Av. Las Artes 850" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>N° Celular</label>
                                                <input type="text" class="form-control border-input" required name="telf1" placeholder="Ejemplo, 943695348">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">    

                                                <label>Fecha de recojo</label>
                                                <input type="text" id="datepicker" class="form-control border-input" required name="fecha_r" placeholder="Día/Mes/Año" readonly style="background: #fffcf5">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input type="text" class="form-control border-input" required name="ciudad" placeholder="Ejemplo, Lima">
                                            </div>
                                        </div>
                                        <p style="margin-left: 2.5%; color: gray; font-size: 12px">*Al "Reciclar" Aceptas los <a href="#">Terminos de Servicio</a> y un asesor se comunicará contigo en las siguientes 24h.</p>
                                        <p style="margin-left: 2.5%; color: gray; font-size: 12px">*Se pagará según el estado verificar que el <a href="#" onclick="bajar()">estado</a> este correcto.</p>
                                        <script>
                                            function bajar(){
                                                document.getElementById("estados").scrollIntoView();
                                            }
                                        </script>
                                        <p style="margin-left: 2.5%; color: gray; font-size: 12px">*Solo se muestran las fechas disponibles de recojo</p>
                                    </div>
                                    <div class="text-center">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        <input type="hidden" name="marca" value="{{ $celular[0]->marca }}" />
                                        <input type="hidden" name="cod_produc" value="{{ $celular[0]->nombre }}" />
                                        <input type="hidden" name="cod_user" value="{{ Auth::User()->id }}" />
                                        <input type="hidden" id="monto" name="precio_fin" value="{{ $buen }}" />
                                        <input type="hidden" name="metodo_p" value="efectivo" />
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" onclick="activar()">Reciclar</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7" id="estados">
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



        @include('partials.footer')

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
      <script>
        
        var test = "";
        var i = 0;
        var arreglo = [];
        @foreach($disable as $disa)
            var disas = "{{$disa}}";
            if (disas != '') {                
                test = test + "{{$disa}}";
                arreglo[i] = "{{$disa}}";
                i++;
            }
        @endforeach
        @foreach($disablesig as $disasig)
            var disas = "{{$disasig}}";
            if (disas != '') {                
                test = test + "{{$disasig}}";
                arreglo[i] = "{{$disasig}}";
                i++;
            }
        @endforeach
        var disabledDays = arreglo;
        function nationalDays(date) {
            var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
            //console.log('Checking (raw): ' + m + '-' + d + '-' + y);
            for (i = 0; i < disabledDays.length; i++) {
                if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1 || new Date() > date) {
                    //console.log('bad:  ' + (m+1) + '-' + d + '-' + y + ' / ' + disabledDays[i]);
                    return [false];
                }
            }
            //console.log('good:  ' + (m+1) + '-' + d + '-' + y);
            return [true];
        }
        function noWeekendsOrHolidays(date) {
            return nationalDays(date);
        }


          $( function() {
                var max = {{ $max }};
                var min = {{ $min }};
                $( "#datepicker" ).datepicker({
                   maxDate: '+'+max+'m',
                   minDate: '+'+min+'d',
                   dateFormat: 'dd/mm/yy',
                   constrainInput: true,
                   beforeShowDay: noWeekendsOrHolidays,
                });
          });


          function activar(){
               document.getElementById("datepicker").style.disabled = false;
          }
      </script>

