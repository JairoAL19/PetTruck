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
                  <p class="animated bounceInUp">NOSOTROS</p>
                  <div class="animated bounceInUp" id="subraya_banner_nosotros"></div>    
                </div>
            </div> 
            <div id="mision_vision">
                <div id="mision">
                    <img class="logo_animated bounceInLeft" src="/img/mision.png">
                    <b><p class="logo_animated bounceInLeft" id="mision_title">MISIÓN</p></b>
                    <div class="logo_animated bounceInLeft" id="mision_subraya"></div>
                    <p class="logo_animated bounceInLeft" id="mision_texto">Llevamos felicidad y cuidamos a tu mascota.</p>
                </div>
                <div id="vision">
                    <img class="logo_animated bounceInRight" src="/img/vision.png">
                    <b><p class="logo_animated bounceInRight" id="vision_title">VISIÓN</p></b>
                    <div class="logo_animated bounceInRight" id="vision_subraya"></div>
                    <p class="logo_animated bounceInRight" id="vision_texto">Ser la primera empresa de servicio veterinario en el Perú.</p>
                </div>
            </div> 
            <div id="nuestros_valores">
                <div id="nuestros_valores_bg"></div>
                <div id="nuestros_valores_bg_top"></div>                
                <div id="nuestros_valores_divg">
                    <div id="nuestros_valores_divtop">
                        <p class="logo_animated bounceInLeft" id="nuestros_valores_title">NUESTROS VALORES</p>
                        <div class="logo_animated bounceInLeft" id="nuestros_valores_subraya"></div>
                    </div>
                    <div class="margen" style="margin-right: auto; margin-left: auto; text-align: center;">
                        <div>
                            <div class="animated bounceInUp" style="display: inline-grid; margin-right: 6%; text-align: center;">
                                <img id="solidaridad" src="/img/solidaridad.png">
                                <p id="texto_soli">SOLIDARIDAD</p>
                            </div>
                            <div class="animated bounceInUp" style="display: inline-grid; margin-right: 6%; text-align: center;">
                                <img id="solidaridad" src="/img/compromiso.png">
                                <p id="texto_soli">COMPROMISO</p>
                            </div>
                            <div class="animated bounceInUp" style="display: inline-grid; margin-right: 6%; text-align: center;">
                                <img id="solidaridad" src="/img/pasion.png">
                                <p id="texto_soli">PASIÓN</p>
                            </div>
                            <div class="animated bounceInUp" style="display: inline-grid; margin-right: 6%; text-align: center;">
                                <img id="solidaridad" src="/img/integridad.png">
                                <p id="texto_soli">INTEGRIDAD</p>
                            </div>
                            <div class="animated bounceInUp" style="display: inline-grid; text-align: center; ">
                                <img id="solidaridad" src="/img/responsabilidad-social.png">
                                <p id="texto_soli">RESPONSABILIDAD</br>SOCIAL</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div> 
            <div id="porque_elegir">
                <div id="porque_elegir_bg1"></div>
                <div id="porque_elegir_bg2"></div>
                <div class="margen">
                    <div style="width: 44%; margin-left: auto;margin-right: auto; margin-bottom: 4%">
                        <p id="tittle_porque_e">¿POR QUÉ ELEGIR PET TRUCK?</p>
                        <div id="subraya_title"></div>
                    </div>
                    <div>
                        <div id="div_pasion_animal">
                            <div id="porque_elegir_base1">                        
                            </div>
                            <img src="/img/pasion-animal.png" style="margin-bottom: 9%; width: 45%">
                            <p id="text_pasion_animal">PASIÓN POR</br> LOS ANIMALES</p>
                            <div id="linea_blanca"></div>
                            <p id="text_pasion_animal2">Nos interesa que los animales estén cuidados y saludables, por eso tenemos el mejor Staff, los mejores productos y servicios especializados.</p>
                        </div>                
                        <div id="divisor"></div>  
                        <div id="div_pasion_animal">
                            <div id="porque_elegir_base1">                        
                            </div>
                            <img src="/img/tecxnologia.png" style="margin-bottom: 9%; width: 40%">
                            <p id="text_pasion_animal">TECNOLOGÍA Y ACCESIBILIDAD</p>
                            <div id="linea_blanca"></div>
                            <p id="text_pasion_animal2">¡Tomar nuestros servicios es súper fácil! Contamos con una aplicacíón móvil y central telefónica las 24 horas del día, solo tienes que programar tu cita y esperar que nuestro camión llegue. Es magia.</p>
                        </div> 
                        <div id="divisor"></div>  
                        <div id="div_pasion_animal">
                            <div id="porque_elegir_base1">                        
                            </div>
                            <img src="/img/express.png" style="margin-bottom: 13%; width: 45%">
                            <p id="text_pasion_animal">SERVICIO</br> EXPRESS</p>
                            <div id="linea_blanca"></div>
                            <p id="text_pasion_animal2">¡Olvidate del tráfico! ¡Que tu engreido se olvide de las horas de espera en jaula y del espantoso transporte! Con nuestro camión ambientado todo se hace en la puerta de tu hogar. </p>
                        </div>
                        <div id="divisor"></div>  
                        <div id="div_pasion_animal">
                            <div id="porque_elegir_base1">                        
                            </div>
                            <img src="/img/ayuda-a-los-demas.png" style="margin-bottom: 9%; width: 29%">
                            <p id="text_pasion_animal">AYUDA A </br>LOS DEMÁS</p>
                            <div id="linea_blanca"></div>
                            <p id="text_pasion_animal2">Contratando nuestros servicios no solo ayudas a tu mascota, ¡también ayudas a los que no tienen la misma suerte! Visitamos una vez al mes diferentes albergues para brindar ayuda</p>
                        </div>   
                    </div>
                </div>   
            </div>
            <div id="nuestros_servicios">
                <div id="nuestros_servicios_fondo"></div>
                <div id="nuestros_servicios_fondo_degra"></div>
                <div id="ns_text">
                    <div id="ns_tittle"><p>NUESTROS SERVICIOS</p></div>
                    <div id="ns_tittle_subra"></div>
                    <div id="ns_subtittle"><p>SERVICIOS ONTRUCK</p></div>
                    <div id="ns_div1">
                        <div id="ns_div1_sec1">
                            <img src="/img/medicado2.png">
                            <p id="ns_sec1_p1">BAÑO MEDICADO</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/paticure2.png">
                            <p id="ns_sec1_p1">PELUQUERÍA + PATICURE</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/pipetas2.png">
                            <p id="ns_sec1_p1">PIPETAS ANTI-PARÁSITOS</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                    </div>
                    <div id="ns_div1">
                        <div id="ns_div1_sec1">
                            <img src="/img/microshit2.png">
                            <p id="ns_sec1_p1">MICROCHIPING</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/vacuna2.png">
                            <p id="ns_sec1_p1">VACUNACIÓN</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">Tu engreido necesita estar protegido. ¡No lo expongas! Consulta nuestro cronograma de vacunación <a style="color: yellow" href="#">aquí</a></p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/desparacitacion2.png">
                            <p id="ns_sec1_p1">DESPARACITACIÓN</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>                        
                    </div>
                    <div id="subraya_blanco"></div>
                    <div id="ns_subtittle"><p>SERVICIOS EXPRESS</p></div>
                    <div id="ns_div1">
                        <div id="ns_div1_sec1">
                            <img src="/img/groming2.png">
                            <p id="ns_sec1_p1">GROOMING</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/adiestramiento2.png">
                            <p id="ns_sec1_p1">ADIESTRAMIENTO</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">Nuestros coaches lograrán que sean obedientes sin perder su esencia. ¡No importa que tan traviesos sean!</p>
                        </div>
                        <div id="ns_div1_sec1">
                            <img src="/img/paseo-de-perros2.png">
                            <p id="ns_sec1_p1">PASEOS CANINOS</p>
                            <div id="subra_rojo"></div>
                            <p id="ns_sec1_p2">¡Tu engreído merece lo mejor! Nuestros baños medicados le brindarán un momento de relajación</p>
                        </div>                        
                    </div>
                    <div><button id="button_agenda">AGENDA TU CITA</button></div>
                </div>        
            </div>
            <div id="div_testimonios" style="background: white">
                <div id="div_testimonios_2" class="margen">
                    <div style="width: 25%; margin-left: auto;margin-right: auto; margin-bottom: 4%">
                        <p id="tittle_porque_e">NUESTROS ALIADOS</p>
                        <div id="subraya_title"></div>
                    </div>
                    <p id="div_testimonios_3_p5">Nuestros aliados estratégicos son empresas y fundaciones que comparten nuestra pasión por los animales. ¡Gracias a ellos podemos seguir creciendo y ayudando!</p>
                    <div class="slider2">
                      <div class="slide" style="background: none">
                            <div id="cover_img">
                               <img src="/img/auspi.png" style="margin-left: 23%">  
                            </div>                            
                      </div>
                      <div class="slide">
                            <div id="cover_img">
                               <img src="/img/auspi.png" style="margin-left: 23%">    
                            </div> 
                      </div>
                      <div class="slide">
                            <div id="cover_img">
                               <img src="/img/auspi.png" style="margin-left: 23%">   
                            </div> 
                      </div>
                    </div>
                </div>
            </div> 
            @include('partials.nosotros_js')        
        @include('partials.footer')        
    </div>
</div>
@endsection
