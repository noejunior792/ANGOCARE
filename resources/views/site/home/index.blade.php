@extends('layouts.site.index')
@section('titulo','Pagina Inicial')
@section('conteudo')
    <!-- Banner Start -->
    <section class="main-banner home-style-second">
        <div class="slides-wrap">
            <div class="owl-carousel owl-theme">
                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover" style="background-image: url({{asset('asset/images/slider/slider_home_first_2.jpg')}});">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Aumentando a esperança</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Para os moradores de rua
                                    </h1>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                
                
                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover" style="background-image: url({{asset('asset/images/slider/slider_home_first_3.jpg')}});">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Aumentando a esperança</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Para os moradores de rua
                                    </h1>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/owl-slide-->
                <div class="owl-slide d-flex align-items-center cover" style="background-image: url({{asset('asset/images/slider/slider_home_first_1.jpg')}});">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start no-gutters">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h3 class="owl-slide-animated owl-slide-title">Aumentando a esperança</h3>
                                    <h1 class="owl-slide-animated owl-slide-subtitle">
                                        Para os moradores de rua
                                    </h1>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
            
        </div>
    </section>
    <!-- Banner Start -->

    <!-- Main Body Content Start -->
    <main id="body-content" class="body-non-overflow">

        <!-- Donation Style Start -->
        <section class="bg-white">
            <div class="container">
                <div class="row align-items-center">  
                    <div class="col-lg-5 col-md-12 order-lg-last">
                        <div class="home-second-donation-form">                                                    
                           

                            <div class="col-lg-7 col-md-12">
                                <div class="text-center">
                                    <img src="{{asset('asset/images/about_img.png')}}" alt="">
                                </div>
                            </div>
                                
                        </div>
                    </div> 
                    
                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-lg-7 col-md-12">
                        <div>
                            
                            <h1 class="heading-main">
                                <small>Bem-vindo ao aumentar a esperança</small>
                                Pequenas ações levam a grandes mudanças
                            </h1>
                            <p>Isso representa 14% da população mundial. Dito de outra forma, isto significa que 1 em cada 8 pessoas vivas hoje vive sem esperança entre lixo, esgoto, drogas e abuso em condições inimagináveis. A vida sem habitação segura é uma vida sem satisfação das necessidades básicas.</p>                        

                            <div class="row my-5 home-second-welcome">                      
                                <!-- Map Icons Start -->
                                {{-- <div class="col-sm-6 mb-md-0">
                                    <div class="icon-box-1">
                                        <i class="charity-volunteer_people"></i>
                                        <div class="text">
                                            <h3>3,750 <br> <span>Produtos Fiduciários</span></h3>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Map Icons Start -->

                                <!-- Map Icons Start -->
                                <div class="col-sm-6">
                                    <div class="icon-box-1">
                                        <i class="charity-donate_money"></i>
                                        <div class="text">
                                            <h3>{{ $fundos }} Kz <br> <span>Fundos Fiduciários</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Map Icons Start -->
                            </div>
@guest
<a href="{{ route('login') }}" class="btn btn-outline-default">Inscreva-se</a>
@endguest
                           
                        </div>
                    </div>

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    
                </div>
            </div>
        </section>
        <!-- Donation Style Start -->

        <!-- Welcome Home Style Start -->
        <section class="wide-tb-100 pb-5 bg-green">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Bem-vindo ao aumentar a esperança</small>
                            Pequenas ações levam a grandes mudanças
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="wide-tb-100 pt-0 welcome-broke-grid green pb-5">          

            <div class="container">
                <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Icon Boxes Image Style -->
                        <div class="icon-box-with-img">                                                        
                            <div class="img">
                                <a href="#"><img src="{{asset('asset/images/causes/causes_img_1.jpg')}}" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Ajuda para a educação</h3>
                                <p>Uma serenidade maravilhosa tomou posse de toda a minha alma</p>
                                <div class="text-md-end">
                                    {{-- <a href="#" class="read-more-line"><span>Read More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Icon Boxes Image Style -->
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Icon Boxes Image Style -->
                        <div class="icon-box-with-img">                            
                            <div class="img">
                                <a href="#"><img src="{{asset('asset/images/causes/causes_img_4.jpg')}}" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Ajuda para a humanidade</h3>
                                <p>Uma serenidade maravilhosa tomou posse de toda a minha alma</p>
                                <div class="text-md-end">
                                    {{-- <a href="#" class="read-more-line"><span>Read More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Icon Boxes Image Style -->
                    </div>

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Icon Boxes Image Style -->
                        <div class="icon-box-with-img">  
                            <div class="img">
                                <a href="#"><img src="{{asset('asset/images/causes/causes_img_3.jpg')}}" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Ajuda para água</h3>
                                <p>Uma serenidade maravilhosa tomou posse de toda a minha alma</p>
                                <div class="text-md-end">
                                    {{-- <a href="#" class="read-more-line"><span>Read More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Icon Boxes Image Style -->
                    </div>
                    

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Icon Boxes Image Style -->
                        <div class="icon-box-with-img">
                            <div class="img">
                                <a href="#"><img src="{{asset('asset/images/causes/causes_img_5.jpg')}}" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Ajuda para comida</h3>
                                <p>Uma serenidade maravilhosa tomou posse de toda a minha alma</p>
                                <div class="text-md-end">
                                    {{-- <a href="#" class="read-more-line"><span>Read More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Icon Boxes Image Style -->
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Welcome Home Style Start -->

        <!-- Counter Style 2 -->
        <section class="wide-tb-100 p-0">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-4 col-md-6">
                        <div class="counter-style-box small-box">              
                            <div class="counter-txt"><span class="counter">{{ $financiamento }}</span>+</div>
                            <div>Pedidos por Recursos<br> <Select:disabled></Select:disabled>Financeiros</div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-4 col-md-6">
                        <div class="counter-style-box small-box">              
                            <div class="counter-txt"><span class="counter">{{ $organizacao }}</span>+</div>
                            <div>Organizacões</div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-4 col-md-6">
                        <div class="counter-style-box small-box">              
                            <div class="counter-txt"><span class="counter">{{ $produto }}</span>+</div>
                            <div>Pedidos por Recursos <br>Máterias</div>
                        </div>
                    </div>
                    <!-- Counter Col End -->
                </div>
            </div>
        </section>
        <!-- Counter Style 2 -->

        <!-- Causes Grid Start -->
        <section class="wide-tb-100">
            <div class="container">
                
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <h1 class="heading-main">
                            <small>Ajude-nos agora</small>
                            Pedidos de Ajuda mais recentes
                        </h1>
                    </div>
                    <div class="col-lg-8 col-md-6 text-md-end btn-team">
                        <a href="{{ route('site.causas.index') }}" class="btn btn-outline-dark">Ver todas Pedidos de Ajuda</a>
                    </div>
                </div>

                <div class="owl-carousel owl-theme" id="home-second-causes">
                    @foreach ($doacoes as $doacao)
                        
                   
                    <!-- Causes Wrap -->
                    <div class="item">
                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{ route('site.causas.show',$doacao->id) }}"><img src="{{asset($doacao->capa)}}" alt=""></a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            {{ $doacao->total }}Kz alcançado de {{ $doacao->valores }}Kz
                                        </div>
                                        @php
                                            $porcetangem=($doacao->total/$doacao->valores)*100
                                        @endphp
                                        <div class="skillbar" data-percent="{{ $porcetangem }}%">
                                            <div class="skillbar-percent">{{ $porcetangem }}%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>             
                                    </div>
                                </div>
                            </div>

                            <div class="content-wrap">
                                <span class="tag">{{ $doacao->categoria }}</span>
                                <h3><a href="{{ route('site.causas.show',$doacao->id) }}">{{ $doacao->titulo }}</a></h3>
                                <p>{{ $doacao->utilizador }}</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{ route('site.causas.show',$doacao->id) }}">Doe agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Causes Wrap -->
                
                    @endforeach
                    
                
                </div>
            </div>
        </section>
        <!-- Causes Grid Start -->
        

        <!-- Callout Style Start -->
        <section class="wide-tb-100 bg-scroll bg-img-1 pos-rel callout-style-1">
            <div class="bg-overlay black opacity-50"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="heading-main light-mode laranja">
                            <small>Ajude outras pessoas</small>
                            Sonhamos em criar um futuro brilhante para as crianças carentes
                        </h1>
                      
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout Style End -->
 <!-- Images Gallery Style Start -->
 <section class="wide-tb-100">
    <div class="container">
        <div class="row img-gallery">                    
            <div class="col-lg-4">
                <h1 class="heading-main mb-lg-0">
                    <small>Galeria de Imagens</small>
                    Pedidos de ajuda Realizados
                </h1>
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_1.jpg') }}" title="School Development">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>School Development</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_1.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_2.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_2.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_3.jpg') }}" title="Child Welfare">
                        {{-- <div class="gallery-content">
                            <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        {{-- </div> --}}
                        <img src="{{ asset('asset/images/gallery/gallery_img_3.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_4.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_4.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_5.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_5.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_6.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_6.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_7.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_7.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="{{ asset('asset/images/gallery/gallery_img_8.jpg') }}" title="Child Welfare">
                        <div class="gallery-content">
                            {{-- <div class="tag"><span>Education</span></div>
                            <h3>Child Welfare</h3> --}}
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="{{ asset('asset/images/gallery/gallery_img_8.jpg') }}" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

        </div>
    </div>
</section>
<!-- Images Gallery Style End -->

    
        <!-- About Us Style Start -->
        <section class="wide-tb-100 bg-white shadow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center">
                            <img src="{{asset('asset/images/about_img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Sobre nós</small>
                            Dê um passo à frente, sirva a humildade, alcance e ajude
                        </h1>

                        <p>O segredo da felicidade está em ajudar os outros. Nunca subestime a diferença que VOCÊ pode fazer nas vidas dos pobres, dos abusados ​​e dos desamparados. Espalhe a luz do sol em suas vidas, não importa o clima.</p>

                        {{-- <div class="icon-box-1 my-4">
                            <i class="charity-volunteer_people"></i>
                            <div class="texto">
                                <h3>Trabalhar como estagiário</h3>
                                <p>Sed quia consequuntur agni dolores eos qui ratoluptatem sequi nesciun porquis</p>
                            </div>
                        </div> --}}
                        
                        <div class="d-flex">
                            <a class="btn btn-default me-3" href="{{ route('login') }}">Inscreva-se agora</a>
                            <div class="sobre-telefone">
                                <i data-feather="phone-call"></i>
                                Contate-nos <br> +244 911 111 111
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Style Start -->



 
        {{-- <!-- Google Map Style Start -->   
        <section class="wide-tb-100 pb-0">
            <div class="map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5516.795517377202!2d15.049412799495283!3d12.114648541083664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111961f67b29ef2d%3A0xd39cbe5e3ec7b840!2sRue%20de%20Mongo%2C%20N%27Djamena%2C%20Chad!5e0!3m2!1sen!2sjo!4v1699964474698!5m2!1sen!2sjo"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Callout Section Side Image -->
                    <div class="col-sm-12">
                        <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid">
                            <div class="img-callout">
                                <img src="{{asset('asset/images/callout_side_img.jpg')}}" alt="">
                            </div>
                            <div class="text-callout">
                                <div class="d-sm-flex align-items-center">                                   
                                    <div class="heading">
                                        <h2>Vamos nos unir para fazer a diferença</h2>
                                    </div>
                                    <div class="icon">
                                        <a href="{{ route("site.causas.index") }} class="btn btn-default">Doe agora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Callout Section Side Image -->
                </div>
            </div>
        </section> --}}
        <!-- Google Map Style End -->   

        <!-- Our Partners Start -->
        {{-- <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="heading-main">
                            <small>Provedores Globais</small>
                            Nosso parceiro mundial
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="home-clients">
    
                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="{{asset('asset/images/clients/client1.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->
    
                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="{{asset('asset/images/clients/client2.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->
    
                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="{{asset('asset/images/clients/client3.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->
    
                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="{{asset('asset/images/clients/client4.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->
    
                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="{{asset('asset/images/clients/client5.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->
    
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Our Partners End -->
        
           
    </main>
@endsection