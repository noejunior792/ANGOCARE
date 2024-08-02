@extends('layouts.site.index')
@section('titulo','Sobre Nós')
@section('conteudo')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Sobre Nós</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sobre Nós</script></li>
                    </ol>
                </nav>  
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

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
    
    
        <!-- Get to Know Us Style Start -->
        {{-- <section class="wide-tb-100 bg-white mb-spacer-md">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Get to Know Us</small>
                            Let Us Come Together To Make a Difference
                        </h1>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                        <!-- Animated Skillbars Start -->
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Food Help
                            </div>
                            <div class="skillbar" data-percent="67%">
                                <div class="skillbar-percent">67%</div>
                                <div class="skillbar-bar"></div>
                            </div>             
                        </div>
                        <!-- Animated Skillbars Start -->

                        <!-- Animated Skillbars Start -->
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Medical Help
                            </div>
                            <div class="skillbar" data-percent="85%">
                                <div class="skillbar-percent">85%</div>
                                <div class="skillbar-bar"></div>
                            </div>             
                        </div>
                        <!-- Animated Skillbars Start -->
                    </div>
                    
                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-lg-7 col-md-12">
                        <!-- Theme Tabbing Style -->
                        <ul class="nav nav-pills theme-tabbing mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" href="#pills-mission" role="tab" aria-controls="pills-mission" aria-selected="true">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" href="#pills-vision" role="tab" aria-controls="pills-vision" aria-selected="false">Our Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-history-tab" data-bs-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false">Our History</a>
                            </li>
                        </ul>
                        <div class="tab-content theme-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">                                
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="asset/images/about_img_2.jpg" class="about-us-2" alt="">
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Nsectetur cing elit.</li>
                                            <li>Suspe ndisse suscipit sagittis leo.</li>
                                            <li>Entum estibulum dignissim posuere.</li>
                                            <li>If you are going to use a passage.</li>
                                            <li>Lorem Ipsum on the tend to repeat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="asset/images/about_img_2.jpg" class="about-us-2" alt="">
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Nsectetur cing elit.</li>
                                            <li>Suspe ndisse suscipit sagittis leo.</li>
                                            <li>Entum estibulum dignissim posuere.</li>
                                            <li>If you are going to use a passage.</li>
                                            <li>Lorem Ipsum on the tend to repeat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="about-img-small">
                                            <img src="asset/images/about_img_2.jpg" class="about-us-2" alt="">
                                            <div class="since-year">
                                                <span>Since</span>
                                                14
                                                <span class="text-end">Years</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Nsectetur cing elit.</li>
                                            <li>Suspe ndisse suscipit sagittis leo.</li>
                                            <li>Entum estibulum dignissim posuere.</li>
                                            <li>If you are going to use a passage.</li>
                                            <li>Lorem Ipsum on the tend to repeat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Theme Tabbing Style -->
                        
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Get to Know Us Style End -->

   

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
        <!-- Our Partners Start -->
        {{-- <section class="wide-tb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="heading-main">
                            <small>Global Providers</small>
                            Our World Wide Partner
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="asset/images/clients/client1.png" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="asset/images/clients/client2.png" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="asset/images/clients/client3.png" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="asset/images/clients/client4.png" alt="">
                                </div>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <div class="clients-logo">
                                    <img src="asset/images/clients/client5.png" alt="">
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