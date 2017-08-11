@extends('app_admin')

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
                    <a class="navbar-brand" href="Tec" style="color: white">Recicla Ganando Dinero</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 2%">

                        Hola, {{ Auth::User()->name }}
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content" id="bg" >
            <div>        
                <a href="/admin845967/Solicitudes_A"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-success"><b>Activos</b></button></a>
                <a href="/admin845967/Solicitudes_P"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-warning"><b>Pendientes</b></button></a>
                <a href="/admin845967/Solicitudes_I"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-danger"><b>Canceladas</b></button></a>
                <a href="/admin845967/Solicitudes_T"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-info"><b>Terminadas</b></button></a>
            </div>
            <form action="/admin845967/Solicitudes_Editar/{{$solicitudes->id}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered" id="myTable">
                <tr>
                    <td>N°</td>
                    <td>Activo</td>
                    <td>Usuario</td>
                    <td>Producto</td>
                    <td>Fecha de Recojo</td>
                    <td>Precio Final</td>
                    <td>Estado</td>
                    <td>Courier</td>
                    <td>Opciones</td>   
                </tr>                
                <tr>
                    <td>{{ $cont++ }}</td>
                    <td style="text-align: center;">
                        <select name="act">
                            <option value="A">Activo</option>
                            <option value="I">Inactivo</option>
                            <option value="T">Terminado</option>
                        </select>
                    </td>                    
                    <td>{{$solicitudes->cod_user}}</td>
                    <td>{{$solicitudes->cod_produc}}</td>
                    <td>{{$solicitudes->fecha_r}}</td>
                    <td>{{$solicitudes->precio_fin}}</td>
                    <td>{{$solicitudes->estado}}</td>
                    <td>
                    @if(is_string($couriers) == false)
                        <select name="" id="data" onchange="cambiarvalue()">                            
                                @foreach($couriers as $courier)
                                    <option value="{{$courier->id}}">{{$courier->nombre}} {{$courier->hora}}</option>
                                @endforeach
                        </select>
                    @else
                        {{$couriers}}
                    @endif
                    </td>
                    <td>
                        <script>
                            function cambiarvalue(element){
                                    var e = document.getElementById("data");
                                    var strUser = e.options[e.selectedIndex].value;
                                    var strUser1 = e.options[e.selectedIndex].text;
                                    document.getElementById("courier_id").value = strUser;
                                    document.getElementById("courier").value = strUser1;
                            }                            
                        </script>
                        @if(is_string($couriers) == false)
                            <input type="hidden" id="courier_id" name="courier_id" value="{{$couriers[1]->id}}" />
                            <input type="hidden" id="courier" name="courier" value="{{$couriers[1]->nombre}} {{$couriers[1]->hora}}" />
                        @endif
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input type="submit" name="enviar" value="Enviar" class="button">
                    </td>
                    </tr> 
                
            </table>
            </form>


        </div>

        @include('partials.footer')
        

    </div>
@endsection
    <!--   Core JS Files   -->
    <script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/demo.js"></script>

