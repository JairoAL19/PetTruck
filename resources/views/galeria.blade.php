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
                  <div class="animated bounceInUp" id="subraya_banner_nosotros"></div>    
                </div>
            </div> 
            <div style="background: white">
              <div id="left_main" class="logo_animated bounceInLeft">
                <div id="2017">
                  <div id="number_año">
                    <a href="#" style="text-decoration: none">2017</a>
                  </div>
                  <div id="mes">
                    <ul style="list-style:none">
                      <li>ENERO</li>
                      <li>FEBRERO</li>
                      <li>MARZO</li>
                      <li>ABRIL</li>
                      <li>MAYO</li>
                      <li>JUNIO</li>
                      <li>JULIO</li>
                      <li>AGOSTO</li>
                      <li>SEPTIEMBRE</li>
                      <li>OCTUBRE</li>
                      <li>NOVIEMBRE</li>
                      <li>DICIEMBRE</li>
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
                      <div class="image fit" style="display: block">
                        <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                      </div>
                      <div class="image fit" style="display: block">
                        <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                      </div>
                  </div>
                  <div class="columns" style="-moz-column-count: 1; -webkit-column-count: 1; column-count: 1; margin-top: 1%">
                      <div class="image fit">
                        <a href="detail1.html"><img src="images/galeria4.png" alt="" /></a>
                      </div>
                  </div>
                  <div class="columns" style="-moz-column-count: 3; -webkit-column-count: 3; column-count: 3; margin-top: 0.5%">
                      <div class="image fit" style="display: block">
                        <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                      </div>
                      <div class="image fit" style="display: block">
                        <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                      </div>
                      <div class="image fit" style="display: block">
                        <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                      </div>
                  </div>
                  <div style="margin-top: 1%">
                      <div style="width: 50%; display: inline-block;">
                        <div class="columns" style="-moz-column-count: 1; -webkit-column-count: 1; column-count: 1;">
                            <div class="image fit">
                              <a href="detail1.html"><img src="images/galeria4.png" alt="" /></a>
                            </div>
                            <div class="image fit">
                              <a href="detail1.html"><img src="images/galeria4.png" alt="" /></a>
                            </div>
                        </div>
                      </div>
                      <div style="width: 48%; display: inline-block; vertical-align: top; margin-left: 1%">
                        <div class="columns" style="-moz-column-count: 1; -webkit-column-count: 1; column-count: 1;">
                            <div class="image fit">
                              <a href="detail1.html"><img src="images/galeria3.jpg" alt="" /></a>
                            </div>
                        </div>
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
