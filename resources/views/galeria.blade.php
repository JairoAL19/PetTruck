@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/assets/css/main.css" />
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
            <div id="main">
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
              </div>
            </div>
            @include('partials.welcome_js')
        @include('partials.footer')        
    </div>
</div>
@endsection
