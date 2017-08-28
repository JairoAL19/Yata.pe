<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<p>Tu solicitud fue registrada satisfactoriamente. Puedes ver tus solicitud en la opción "Solicitudes". Un asesor YATA se comunicará contigo en las siguientes 24h para determinar la hora exacta del recojo de tu <b>{{ $array[2] }}</b>, luego un courier se acercará el día <b>{{ $array[3] }}</b>, comproborá que la condición del producto sea <b>{{ $array[6] }}</b>. El pago de <b>S/.{{ $array[4] }}</b> se realizará despues de la verificación, Gracias por usar Yata.pe y ayudar a un mundo mejor.</p></br>
                    <p>Cliente: <b style="color: green">{{ $array[1] }} </b></p>
                    <p>Correo: <b style="color: green">{{ $array[0] }} </b></p>
                    <p>Servicio: <b style="color: green">Web Recycle</b></p></br>
                    <img style="width: 30%; " src="http://vendemelo.pe/img/courier.jpg"></br></br>
</body>
</html>