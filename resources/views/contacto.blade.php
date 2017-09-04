@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link rel="stylesheet" href="/assets/css/main.css" />
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/banner_page.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/galeria.css">
<link rel="stylesheet" href="/css/contacto.css">
<div class="wrapper">  
    <div class="main-panel">
        <div id="login" class="modal">
            <!-- Modal content -->
            <div class="modal-content" id="modal_contenido2" style="width: 25%">
                <span class="close2" style="color: white">&times;</span>
                <div class="login-box-body">
                        <form action="{{ url('/auth/login') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email" name="email"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" name="remember"> Recuerdame
                                        </label>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                                </div><!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center">
                            <a href="/social/facebook" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Inicia Sesión usando Facebook</a>
                            <a href="/social/google" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Inicia Sesión usando Google+</a>
                        </div><!-- /.social-auth-links -->

                        <a href="{{ url('/password/email') }}">Olvide mi contraseña</a><br>
                        <a href="{{ url('/auth/register') }}" class="text-center">No tengo cuenta</a>

                    </div><!-- /.login-box-body -->
            </div>
        </div>
        @include('partials.nav')
        <link rel="stylesheet" href="/css/w3a.css">
            <div id="banner_nosotros">
                <div id="imagen_banner_nosotros"></div>  
                <div id="texto_banner_nosotros">
                  <p class="animated bounceInUp">CONTACTO</p>
                  <div id="subraya_banner_nosotros"></div>    
                </div>
            </div>             
            <div id="contacto">
                <div id="contacto_sb1">
                    <p class="logo_animated bounceInLeft">¿QUIERES SER VOLUNTARIO?</p>
                    <div class="logo_animated bounceInLeft" id="subraya_voluntario"></div>
                    <input class="logo_animated bounceInLeft" id="input_1" type="text" name="" value="Nombre Completo">
                    <input class="logo_animated bounceInLeft" id="input_1" type="text" name="" value="Correo Electrónico">
                    <input class="logo_animated bounceInLeft" id="input_1" type="text" name="" value="Número de Teléfono">
                    <input class="logo_animated bounceInLeft" id="enviar" type="submit" name="" value=" ">
                </div>
                <div id="contacto_sb2" class="logo_animated bounceInRight">
                    <p>TRABAJA CON NOSOTROS</p>
                    <div id="subraya_voluntario"></div>
                    <input id="input_1" type="text" name="" value="Nombre Completo">
                    <input id="input_1" type="text" name="" value="Correo Electrónico">
                    <input id="input_1" style="margin-bottom: 5%" type="text" name="" value="Número de Teléfono">
                    <img src="/img/subir.png" style="position: absolute; z-index: 0">
                    <input type="file" style="opacity: 0; background: url(/img/subir.png); position: absolute; z-index: 1">
                </div>
            </div> 
            @include('partials.nosotros_js')
        @include('partials.footer')        
    </div>
</div>
@endsection
