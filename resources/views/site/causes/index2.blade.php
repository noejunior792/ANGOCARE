@extends('layouts.site.index')
@section('titulo','Causes')
@section('conteudo')
  <!-- Page Breadcrumbs Start -->
  <section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1>Explorar Pedios</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Explorar Pedidos</li>
                </ol>
            </nav>  
        </div>
    </div>
</section>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">

    <!-- Causes Grid Start -->
    <section class="wide-tb-100">
        <div class="container">
            <h1 class="heading-main">
                <small>Ajude-nos Agora</small>
                Pedidos mais recentes
            </h1>
            <div class="row">                    
                @foreach ($doacoes as $doacao)
                        
                   
                <!-- Causes Wrap -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="causes-wrap">
                        <div class="img-wrap">
                            <a href="{{ route('site.doar.index2',$doacao->id) }}"><img src="{{asset($doacao->capa)}}" alt=""></a>
                            
                        </div>

                        <div class="content-wrap">
                            <span class="tag">{{ $doacao->categoria }}</span>
                            <h3><a href="{{ route('site.causas.show2',$doacao->id) }}">{{ $doacao->categoria }}</a></h3>
                            <p>{{ $doacao->titulo }}</p>
                            <div class="btn-wrap">
                                <a class="btn-primary btn" href="{{ route('site.doar.index2',$doacao->id) }}">Doe agora</a>
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

    <!-- Featured Cause Start -->
    {{-- <section class="wide-tb-150 bg-white featured-heart-icon-hidden">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="featured-causes-img">
                        <img src="{{asset('asset/images/causes/featured_cause.jpg')}}" alt="">
                        <div class="featured-cause-timer">
                            <h3><strong class="txt-orange">$75,864</strong> prometido de<strong class="txt-blue">$100,000</strong></h3>
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-bar"></div>
                            </div>   
                            <ul id="featured-cause" class="list-unstyled list-inline">
                                <li class="list-inline-item"><span class="days">00</span><div class="days_text">Dias</div></li>
                                <li class="list-inline-item"><span class="hours">00</span><div class="hours_text">Horas</div></li>
                                <li class="list-inline-item"><span class="minutes">00</span><div class="minutes_text">Minutos</div></li>
                                <li class="list-inline-item"><span class="seconds">00</span><div class="seconds_text">Segundos</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-content">
                        <div class="featured-heart-icon"><i class="charity-hearts"></i></div>
                        <h1 class="heading-main">
                            <small>Causa em destaque</small>
                            Doações para ajuda emergencial por uma causa poderosa
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <a href="donation-page.html" class="btn btn-default">DOE agora</a>
                            <div class="share-on-text">
                                <strong>Share On</strong> <a href="#"><img src="{{asset('asset/images/facebook.svg')}}" alt=""></a> <a href="#"><img src="{{asset('asset/images/instagram.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Featured Cause End -->

    <!-- Faq's Style Start -->
    <section class="wide-tb-100 feautred-faqs pb-0">
        <div class="container">
            <div class="pos-rel faqs-wrap">
                <div class="bg-overlay blue opacity-80"></div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12">
                        <h1 class="heading-main light-mode">
                            <small>Tem perguntas</small>
                            perguntas frequentes
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        {{-- <a class="btn btn-default" href="our-faqs.html">Pergunte agora</a> --}}
                    </div>

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="theme-collapse light">
                            <!-- Toggle Links 1 -->
                            <div class="toggle arrow-down">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Nossa filosofia
                            </div>
                            <!-- Toggle Links 1 -->
    
                            <!-- Toggle Content 1 -->
                            <div class="collapse show">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                </div>
                            </div>
                            <!-- Toggle Content 1 -->
    
                            <!-- Toggle Links 2 -->
                            <div class="toggle">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Nossa Organização
                            </div>
                            <!-- Toggle Links 2 -->
    
                            <!-- Toggle Content 2 -->
                            <div class="collapse">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                </div>
                            </div>
                            <!-- Toggle Content 2 -->
    
                            <!-- Toggle Links 3 -->
                            {{-- <div class="toggle">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Saiba mais sobre adoção
                            </div>
                            <!-- Toggle Links 3 -->
    
                            <!-- Toggle Content 3 -->
                            <div class="collapse">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                </div>
                            </div> --}}
                            <!-- Toggle Content 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq's Style End -->

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