@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/footer.css">
<div class="wrapper">  
    <div class="main-panel">
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" id="modal_contenido">
                <span class="close" style="color: white">&times;</span>
                <video id="video_tag" controls="controls" poster="img" preload="true">
                    <source src="/img/video.mp4" type="video/mov"/>
                    <source src="where the video is" type="video/mp4" />
                    <source src="where the video is" type="video/oog" />
                     Your browser does not support the video tag.
                </video>
            </div>
        </div>
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
        <div class="content" style="padding-top: 0px; padding-left: 0px; padding-right: 0px; padding-bottom: 0px">
            <div class="w3-content w3-display-container" style="max-width:100%; background: black">
            
            <div class="w3-display-container mySlides w3-animate-fading">
              <img src="img/slide1.png" id="slide" style="width:100%; filter: brightness(40%);">
              <div class="w3-display-middle w3-large w3-container w3-padding-16" id="div_p_banner">
                <p id="p_banner">“LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM
                NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE ”</p>
              </div>
            </div>

            <div class="w3-display-container mySlides w3-animate-fading">
              <img src="img/slide2.png" id="slide" style="width:100%; filter: brightness(40%);">
              <div class="w3-display-middle w3-large w3-container w3-padding-16" style="width: 55%;">
                <p id="p_banner">“LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM
                NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE ”</p>
              </div>
            </div>

            <div class="w3-display-container mySlides w3-animate-fading">
              <img src="img/slide1.png" id="slide" style="width:100%; filter: brightness(40%);">
              <div class="w3-display-middle w3-large w3-container w3-padding-16" style="width: 55%;">
                <p id="p_banner">“LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM
                NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE ”</p>
              </div>
            </div>

            <div class="w3-display-container mySlides w3-animate-fading" id="myBtn">
                <img src="img/slide2.png" id="slide" style="width:100%; filter: brightness(35%);">
              <div class="w3-display-middle w3-large w3-container w3-padding-16" id="div_play" style="text-align: center;">
                <link rel="stylesheet" href="/css/font-awesome.min.css">
                <i id="play" style="text-align: center; filter: brightness(100%); margin-left: 0px; padding-left: 0px" class="fa fa-play-circle" aria-hidden="true"></i>
              </div>
            </div>
              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)" style="height: 10px;"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)" style="height: 10px;"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)" style="height: 10px;"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)" style="height: 10px;"></span>
              </div>
            </div>
            <div id="objetivo" >
                <p class="logo_animated bounceInUp" style=" color: #EBEBEB; text-align: center;  font-family: sans-serif;">“NUESTRO OBJETIVO ES HACER FELIZ A TU MASCOTA, MIENTRAS FACILITAMOS TU VIDA”</p>
            </div>
            <div id="proceso">
                <div id="proceso_div_2"> 
                    <p id="p_div_2">PROCESO DEL SERVICIO</p>         
                    <div id="div_div_2"></div>         
                </div>
            </div>
            <div id="div_galeria_1">
                <div id="div_galeria_3">
                    <p id="p_div_3">GALERÍA</p>  
                    <div id="div_div_3"></div> 
                    <div class="slider1">
                      <div class="slide" id="slide_1_galeria"><img src="/img/slidegaleria1.png"></div>
                      <div class="slide" id="slide_2_galeria"><img src="/img/slidegaleria2.png"></div>
                      <div class="slide" id="slide_3_galeria"><img src="/img/slidegaleria3.png"></div>                      
                    </div>
                </div>
            </div>
            <div id="div_testimonios">
                <div id="div_testimonios_2">
                    <p>TESTIMONIOS</p>  
                    <div id="div_testimonios_3"></div> 
                    <div class="slider2">
                      <div class="slide" style="background: none">
                            <div style="padding: 5%; background: none">
                               <img id="img_testimonio" src="/img/testimonio1.png">
                                   <div id="img_testimonio_div"> 
                                       @for($i = 1 ; $i <= 5; $i++)
                                            <img id="stars" src="/img/star.png" style="display: inline-block; ">
                                        @endfor
                                    </div>
                               <p id="img_testimonio_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam no</p>     
                            </div>                            
                      </div>
                      <div class="slide">
                            <div style="padding: 5%; background: none">
                               <img src="/img/testimonio2.png" id="img_testimonio">
                                    <div id="img_testimonio_div"> 
                                       @for($i = 1 ; $i <= 5; $i++)
                                            <img id="stars" src="/img/star.png" style="display: inline-block; ">
                                        @endfor
                                    </div>
                               <p id="img_testimonio_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam no</p>     
                            </div> 
                      </div>
                      <div class="slide">
                            <div style="padding: 5%; background: none">
                               <img src="/img/testimonio3.png" id="img_testimonio">
                                    <div id="img_testimonio_div"> 
                                       @for($i = 1 ; $i <= 5; $i++)
                                            <img id="stars" src="/img/star.png" style="display: inline-block; ">
                                        @endfor
                                    </div>
                               <p id="img_testimonio_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam no</p>   
                            </div> 
                      </div>
                    </div>
                </div>
            </div> 
            @include('partials.welcome_js')
        </div>
        @include('partials.footer')        
    </div>
</div>
@endsection
