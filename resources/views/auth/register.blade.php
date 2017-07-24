<!DOCTYPE HTML>
<!--
    Aerial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Yata.pe | Recicla y Gana</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="../assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
        
    </head>
    <body class="loading">
        <div id="wrapper">
            <div id="bg"></div>
            <div id="overlay"></div>
            <div id="main">

                <!-- Header -->
                    <header id="header">
                        <div class="register-box">
                            <h1 style="color: white; font-size: 2.5em; font-weight: 900; letter-spacing: -0.035em; line-height: 2em">Yata . pe</h1>

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Tenemos problemas con los datos ingresados, intenta denuevo.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="register-box-body">
                                <form action="{{ url('/auth/register') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" placeholder="Nombre Completo" name="name" value="{{ old('name') }}"/>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" placeholder="Repite la contraseña" name="password_confirmation"/>
                                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="checkbox icheck">
                                                <label>
                                                    <input type="checkbox"> Acepto <a href="#">Terminos</a>
                                                </label>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-xs-4">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                                        </div><!-- /.col -->
                                    </div>
                                </form>

                                <div class="social-auth-links text-center">
                                    <a href="/social/facebook" class="btn btn-block btn-social btn-facebook btn-flat"><i style="text-align: center;" class="fa fa-facebook"></i> Registrate con facebook</a>
                                    <a href="/social/google" class="btn btn-block btn-social btn-google-plus btn-flat"><i style="text-align: center;"" class="fa fa-google-plus"></i> Registrate con Google+</a>
                                </div>

                                <a href="{{ url('/auth/login') }}" class="text-center">Ya tengo un usuario creado</a>
                            </div><!-- /.form-box -->
                        </div><!-- /.register-box -->
                        @include('auth.scripts')

                        <script>
                            $(function () {
                                $('input').iCheck({
                                    checkboxClass: 'icheckbox_square-blue',
                                    radioClass: 'iradio_square-blue',
                                    increaseArea: '20%' // optional
                                });
                            });
                        </script>
                    </header>

                <!-- Footer -->
                    <footer id="footer">
                        <span class="copyright">&copy; 2017. Design: <a href="http://yata.pe">YataCP</a>.</span>
                    </footer>

            </div>
        </div>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script>
            window.onload = function() { document.body.className = ''; }
            window.ontouchmove = function() { return false; }
            window.onorientationchange = function() { document.body.scrollTop = 0; }
        </script>
    </body>
</html>