@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/banner_page.css">
<link rel="stylesheet" href="/css/nosotros.css">
<link rel="stylesheet" href="/css/footer.css">
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
                  <p>NOSOTROS</p>
                  <div id="subraya_banner_nosotros"></div>    
                </div>
            </div> 
            <div id="mision_vision">
                <div id="mision">
                    <img src="/img/mision.png">
                    <b><p id="mision_title">MISIÓN</p></b>
                    <div id="mision_subraya"></div>
                    <p id="mision_texto">Llevamos felicidad y cuidamos a tu mascota.</p>
                </div>
                <div id="vision">
                    <img src="/img/vision.png">
                    <b><p id="vision_title">VISIÓN</p></b>
                    <div id="vision_subraya"></div>
                    <p id="vision_texto">Ser la primera empresa de servicio veterinario en el Perú.</p>
                </div>
            </div> 
            <div id="nuestros_valores">
                <div id="nuestros_valores_bg"></div>
                <div id="nuestros_valores_bg_top"></div>                
                <div id="nuestros_valores_divg">
                    <p id="nuestros_valores_title">NUESTROS VALORES</p>
                    <div id="nuestros_valores_subraya"></div>
                    <img id="solidaridad" src="/img/solidaridad.png">
                    <img id="compromiso" src="/img/compromiso.png">
                    <img id="pasion" src="/img/pasion.png">
                    <img id="integridad" src="/img/solidaridad.png">
                    <img id="rsocial" src="/img/compromiso.png">
                    <div id="texto_nuestros_valores">
                      <p id="texto_soli">SOLIDARIDAD</p>
                      <p id="texto_comp">COMPROMISO</p>
                      <p id="texto_pasi">PASIÓN</p>
                      <p id="texto_inte">INTEGRIDAD</p>
                      <p id="texto_rsoc">RESPONSABILIDAD SOCIAL</p>
                    </div>
                </div>  
            </div> 
            <div id="porque_elegir"  style="height: 60%;">
                <div style="width: 100%; height: 60%; background: url('/img/perro2.png'); background-size: 100%; position: absolute; z-index: -2"></div>
                <div style="width: 100%; height: 55%; background: url('/img/perro2.png'); background-size: 100%; position: absolute; z-index: -2; filter: blur(3px);"></div>                
                <div style="width: 13%; background: url('/img/bg3.png'); background-repeat: no-repeat; position: absolute; z-index: -1; filter: opacity(0.6); height: 45%; margin-top: 8%; background-size: 100%; margin-left: 20%; height: 38%"></div>
                <div style="width: 13%; background: url('/img/bg3.png'); background-repeat: no-repeat; position: absolute; z-index: -1; filter: opacity(0.6); height: 45%; margin-top: 8%; background-size: 100%; margin-left: 38%; height: 38%"></div>
                <div style="width: 13%; background: url('/img/bg3.png'); background-repeat: no-repeat; position: absolute; z-index: -1; filter: opacity(0.6); height: 45%; margin-top: 8%; background-size: 100%; margin-left: 54%; height: 38%"></div>
                <div style="width: 13%; background: url('/img/bg3.png'); background-repeat: no-repeat; position: absolute; z-index: -1; filter: opacity(0.6); height: 45%; margin-top: 8%; background-size: 100%; margin-left: 71%; height: 38%"></div>

                <div style="background: url('/img/pasion-animal.png'); width: 5%; background-repeat: no-repeat; background-size: 100%; height: 30%; position: absolute; z-index: -1; margin-left: 24%; margin-top: 8.5%"></div>
                <div style="background: url('/img/tecxnologia.png'); width: 4.5%; background-repeat: no-repeat; background-size: 100%; height: 30%; position: absolute; z-index: -1; margin-left: 42%; margin-top: 8.5%"></div>
                <div style="background: url('/img/tecxnologia.png'); width: 4.5%; background-repeat: no-repeat; background-size: 100%; height: 30%; position: absolute; z-index: -1; margin-left: 58%; margin-top: 8.5%"></div>
                <div style="background: url('/img/ayuda-a-los-demas.png'); width: 3.5%; background-repeat: no-repeat; background-size: 100%; height: 30%; position: absolute; z-index: -1; margin-left: 76%; margin-top: 8%"></div>

                <div style="height: 100%; width: 100%">     
                        <p style="color: white; margin-top: 0px; font-size: 30px; font-weight: 700; letter-spacing: 3px; padding-top: 4%; margin-left: 35%">¿POR QUÉ ELEGIR PET TRUCK?</p>
                        <div style="width: 15%; border-top: 2px solid #AC0000; margin-left: 45%"></div>
                        <div style="width: 13%; height: 180px; margin-left: 20%; margin-top: 7%; display: inline-block;">
                            <p style="text-align: center; color: white; letter-spacing: 2px; font-weight: 500; margin-bottom: 2%">PASIÓN POR</br> LOS ANIMALES</p>
                            <div style="width: 90%; border-top: 2px solid white; margin-left: 5%"></div>
                            <p style="width: 90%; margin-left: 5%; color: white; font-size: 13px; text-align: justify; margin-top: 5%; letter-spacing: 1px">Nos interesa que los animales estén cuidados y saludables, por eso tenemos el mejor Staff, los mejores productos y servicios especializados.</p>
                        </div>
                        <div style="width: 13%; height: 180px; margin-left: 4.7%; margin-top: 7%; display: inline-block;">
                            <p style="text-align: center; color: white; letter-spacing: 2px; font-weight: 500; margin-bottom: 2%">TECNOLOGÍA Y ACCESIBILIDAD</p>
                            <div style="width: 90%; border-top: 2px solid white; margin-left: 5%"></div>
                            <p style="width: 90%; margin-left: 5%; color: white; font-size: 11px; text-align: justify; margin-top: 5%; letter-spacing: 1px">¡Tomar nuestros servicios es súper fácil! Contamos con una aplicacíón móvil y central telefónica las 24 horas del día, solo tienes que programar tu cita y esperar que nuestro camión llegue. Es magia.</p>
                        </div>
                        <div style="width: 13%; height: 180px; margin-left: 2.7%; margin-top: 7%; display: inline-block;">
                            <p style="text-align: center; color: white; letter-spacing: 2px; font-weight: 500; margin-bottom: 2%;">SERVICIO</br>EXPRESS</p>
                            <div style="width: 90%; border-top: 2px solid white; margin-left: 5%"></div>
                            <p style="width: 90%; margin-left: 5%; color: white; font-size: 11px; text-align: justify; margin-top: 5%; letter-spacing: 1px">¡Olvidate del tráfico! ¡Que tu engreido se olvide de las horas de espera en jaula y del espantoso transporte! Con nuestro camión ambientado todo se hace en la puerta de tu hogar. </p>
                        </div>
                        <div style="width: 13%; height: 180px; margin-left: 3.7%; margin-top: 7%; display: inline-block;">
                            <p style="text-align: center; color: white; letter-spacing: 2px; font-weight: 500; margin-bottom: 2%;">AYUDA A</br>LOS DEMÁS</p>
                            <div style="width: 90%; border-top: 2px solid white; margin-left: 5%"></div>
                            <p style="width: 90%; margin-left: 5%; color: white; font-size: 11px; text-align: justify; margin-top: 5%; letter-spacing: 1px">Contratando nuestros servicios no solo ayudas a tu mascota, ¡también ayudas a los que no tienen la misma suerte! Visitamos una vez al mes diferentes albergues para brindar ayuda.</p>
                        </div>

                </div>
            </div>
            <div style="height: 150%; ">
                <div style=" height: 150%;width: 100%; background: url('/img/perro3.jpg'); position: absolute; z-index: -3; filter: blur(8px);"></div>
                <div style=" height: 150%;width: 100%; background: rgb(232,168,71);
background: -moz-linear-gradient(top, rgb(232,168,71) 0%, rgb(0,0,0) 71%);
background: -webkit-linear-gradient(top, rgb(232,168,71) 0%,rgb(0,0,0) 71%);
background: linear-gradient(to bottom, rgb(232,168,71) 0%,rgb(0,0,0) 71%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e8a847', endColorstr='#000000',GradientType=0 ); filter: opacity(0.8); position: absolute; z-index: -2"></div>
                <div style="height: 100%; width: 100%; text-align: center;">
                    <div style="width: 100%;"><p style="color: white; margin-top: 0px; font-size: 30px; font-weight: 700; letter-spacing: 3px; padding-top: 2%;">NUESTROS SERVICIOS</p></div>
                    <div style="width: 15%; border-top: 2px solid #AC0000; margin-left: 42.5%"></div>
                    <div style="width: 100%;"><p style="color: white; margin-top: 0px; font-size: 28px; font-weight: 700; letter-spacing: 3px; padding-top: 2%;">SERVICIOS ONTRUCK</p></div>
                    <div style="width: 100%; margin-top: 2%">
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/medicado.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/paticure.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/pipetas.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 2%">
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/microshit.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/vacuna.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">Tu engreido necesita estar protegido. ¡No lo expongas! Consulta nuestro cronograma de vacunación aquí</p>
                        </div>
                        <div style="width: 20%; display: inline-block;">
                            <img src="/img/groming.png">
                            <p style="color: white; margin-top: 4%; font-weight: 600; letter-spacing: 2px">BAÑO MEDICADO</p>
                            <div style="border-top: 2px solid #AC0000; width: 40%; margin-left: 30%"></div>
                            <p style="width: 85%; margin-left: 7.5%; color: white; font-size: 13px; text-align: justify; margin-top: 2%; letter-spacing: 1px">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                    </div>
                </div>

            </div>
            @include('partials.nosotros_js')        
        @include('partials.footer')        
    </div>
</div>
@endsection
