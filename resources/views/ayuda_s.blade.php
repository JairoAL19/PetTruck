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
<link rel="stylesheet" href="/css/ayuda.css">
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
                  <p class="animated bounceInUp">AYUDA SOCIAL</p>
                  <div class="animated bounceInUp" id="subraya_banner_nosotros"></div>    
                </div>
            </div> 
            <div id="voz_animal">
              <div id="voz_animal_bg1"></div>
              <div id="voz_animal_bg2"></div>
            </div>
            <div id="garantia_pt" class="hidemee">
                <div id="garantia_pt_tittle"><p>GARANTÍA PET TRUCK</p></div>
                <div id="subraya_gpt"></div>
                <div id="cuadros">
                    <div id="gpt_1">
                        <div id="box_blanco">
                          <img src="/img/groming3.png">
                          <p id="box_blanco_p1">GROOMING</p>
                          <div id="subraya_gpt2"></div>
                          <p id="box_blanco_p2">Animales de diferentes fundaciones contarán periódicamente con un baño, corte de pelo, paticure y limpieza de orejas para estar siempre presentables. ¡Adopten!</p>
                        </div>
                        <div id="number_top">1</div>
                    </div>
                    <div id="gpt_2">
                        <div id="box_blanco">
                          <img src="/img/groming3.png">
                          <p  id="box_blanco_p1">GROOMING</p>
                          <div id="subraya_gpt2"></div>
                          <p id="box_blanco_p2">Animales de diferentes fundaciones contarán periódicamente con un baño, corte de pelo, paticure y limpieza de orejas para estar siempre presentables. ¡Adopten!</p>
                        </div>
                        <div id="number_top">2</div>
                    </div>
                    <div id="gpt_2">
                        <div id="box_blanco">
                          <img src="/img/groming3.png">
                          <p id="box_blanco_p1">GROOMING</p>
                          <div id="subraya_gpt2"></div>
                          <p id="box_blanco_p2">Animales de diferentes fundaciones contarán periódicamente con un baño, corte de pelo, paticure y limpieza de orejas para estar siempre presentables. ¡Adopten!</p>
                        </div>
                        <div id="number_top">3</div>
                    </div>
                    <div id="gpt_2">
                        <div id="box_blanco">
                          <img src="/img/groming3.png">
                          <p id="box_blanco_p1">GROOMING</p>
                          <div id="subraya_gpt2"></div>
                          <p id="box_blanco_p2">Animales de diferentes fundaciones contarán periódicamente con un baño, corte de pelo, paticure y limpieza de orejas para estar siempre presentables. ¡Adopten!</p>
                        </div>
                        <div id="number_top">4</div>
                    </div>
                </div>
            </div>
            
            <div id="reconocer">
                <p>¿CÓMO RECONOCER UN PET TRUCK?</p>
                <div id="subraya_recono"></div>
            </div>
            
            @include('partials.nosotros_js')
        @include('partials.footer')        
    </div>
</div>
@endsection
