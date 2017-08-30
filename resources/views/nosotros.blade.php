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
            <div id="porque_elegir">
              
            </div>
            @include('partials.nosotros_js')        
        @include('partials.footer')        
    </div>
</div>
@endsection
