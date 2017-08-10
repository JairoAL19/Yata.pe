@extends('app_admin')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<!-- <link rel="stylesheet" href="../assets/css/reciclar.css" /> -->
<style>
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    }

    #myTable {
        border-collapse: collapse; /* Collapse borders */
        width: 100%; /* Full-width */
        border: 1px solid #ddd; /* Add a grey border */
        font-size: 18px; /* Increase font-size */
    }

    #myTable th, #myTable td {
        text-align: left; /* Left-align text */
        padding: 12px; /* Add padding */
    }

    #myTable tr {
        /* Add a bottom border to all table rows */
        border-bottom: 1px solid #ddd; 
    }

    #myTable tr.header, #myTable tr:hover {
        /* Add a grey background color to the table header and on hover */
        background-color: #f1f1f1;
    }    
</style>
<script>
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      }else {
                        tr[i].style.display = "none";
                      }
                } 
        }
    }
</script>
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
                <a href="/admin845967/products"><button style="margin-top: 1%; margin-bottom: 1%" type="button" class="btn"><b>Productos</b></button></a>
                <a href="/admin845967/categorias"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn"><b>Categorías</b></button></a>
                <a href="/admin845967/{{$tip}}/activos"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-success active"><b>Activos</b></button></a>
                <a href="/admin845967/{{$tip}}/inactivos"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%" type="button" class="btn btn-danger active"><b>Inactivos</b></button></a>
                <a href="/admin845967/agregar_products"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%; float: right;" type="button" class="btn btn-primary active"><b>Agregar Producto</b></button></a>
                <a href="/admin845967/agregar_categorias"><button style="margin-top: 1%; margin-bottom: 1%; margin-left: 1%; float: right;" type="button" class="btn btn-primary active"><b>Agregar Categoría</b></button></a>
            </div>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre...">
            <table class="table table-bordered" id="myTable">
                <tr>
                    <td>N°</td>
                    <td>Activo</td>
                    <td>Nombre</td>
                    <td>Código</td>
                    <td>Marca</td>
                    @if($product[0]->memoria != 0)
                        <td>Memoria</td>
                    @endif
                    <td>foto</td>
                    @if($product[0]->memoria != 0)
                        <td>Precio Perfecto</td>
                    @endif
                    <td>Opciones</td>
                </tr>
                @foreach($product as $producto)
                    <tr>
                        <td>{{ $cont++ }}</td>
                        @if($producto->dispo == 'A')
                            <td style="text-align: center;"><img style="width: 32px;" src="../../img/verde.png"></td>
                        @elseif($producto->dispo == 'D')
                            <td style="text-align: center;"><img style="width: 32px" src="../../img/rojo.png"></td>
                        @endif
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cod_produc}}</td>
                        <td>{{ $producto->marca}}</td>
                        @if($product[0]->memoria != 0)
                            <td>{{ $producto->memoria}}</td>
                        @endif
                        <td><img style="width: 64px; height: 64px" src="../../{{$producto->foto}}"></td>
                        @if($product[0]->memoria != 0)
                            <td>S/. {{ $producto->precio_ini}}</td>
                        @endif
                        <td>
                            <img style="width: 32px" src="../../img/editar.png">
                            <a href="/admin845967/products/activar/{{$producto->id}}"><img style="width: 32px" src="../../img/activar.png"></a>
                            <a href="/admin845967/products/desactivar/{{$producto->id}}"><img style="width: 32px" src="../../img/desactivar.png"></a>
                        </td>
                    </tr>
                 @endforeach   
                
            </table>


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

