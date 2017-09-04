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
                  <p class="animated bounceInUp">GALERÍA</p>
                  <div id="subraya_banner_nosotros"></div>    
                </div>
            </div> 
            <div>
              <div id="left_main" class="logo_animated bounceInLeft">
                <div id="2017">
                  <div id="number_año">
                    <a href="#" style="text-decoration: none">2017</a>
                  </div>
                  <div id="mes">
                    <ul style="list-style:none">
                      <li>Enero</li>
                      <li>Febrero</li>
                      <li>Marzo</li>
                      <li>Abril</li>
                      <li>Mayo</li>
                      <li>Junio</li>
                      <li>Julio</li>
                      <li>Agosto</li>
                      <li>Septiembre</li>
                      <li>Octubre</li>
                      <li>Noviembre</li>
                      <li>Diciembre</li>
                    </ul>
                  </div>
                </div>
                <div id="2016">
                  <div id="number_año" style="border: none">
                    <a href="#" style="text-decoration: none">2016</a>
                  </div>
                </div>
              </div>
              <div class="logo_animated bounceInRight" id="main" style="display: inline-block; width: 70%;">
                <div class="inner">
                  <div class="columns">

                    <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic01.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic02.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic03.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic04.jpg" alt="" /></a>
                      </div>

                    <!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic06.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic05.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic08.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic07.jpg" alt="" /></a>
                      </div>

                    <!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic09.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic12.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic11.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic10.jpg" alt="" /></a>
                      </div>

                    <!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic13.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic14.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic15.jpg" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/pic16.jpg" alt="" /></a>
                      </div>
                  </div>
                   <div style="width: 100%; padding-left: 45%"> <img src="/img/mas.png">Ver más </div>
                </div>
              </div>
            </div>
            @include('partials.nosotros_js')
        @include('partials.footer')        
    </div>
</div>
@endsection
