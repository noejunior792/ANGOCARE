@extends('layouts.site.index')
@section('titulo',$doacao->categoria)
@section('conteudo')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $doacao->titulo }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalhe do Pedido</li>
                    </ol>
                </nav>  
            </div>
        </div>
    </section>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- About Us Style Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-9 col-md-12">
                        <div class="sidebar-spacer">
                                                    
                            <h1 class="heading-main">
                                <small>Ajude-nos Agora</small>
                                {{$doacao->titulo}}
                            </h1>
                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <span class="tag-single">{{ $doacao->categoria }}</span>
                                    <video class="col-md-12" src="{{ $doacao->video }}" autoplay controls></video>
                                </div>

                                <div class="content-wrap-single">
                                    <div class="featured-cause-timer">
                                        <h3><strong class="txt-orange">{{ $doacao->total }}Kz</strong> alcançado  de <strong class="txt-blue">{{ $doacao->valores }}Kz</strong></h3>
                                        @php
                                        $porcetangem=($doacao->total/$doacao->valores)*100
                                    @endphp
                                        <div class="skillbar" data-percent="{{ $porcetangem }}%">
                                            <div class="skillbar-percent"><h3><strong>{{ $porcetangem }}%</strong></h3></div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                        {{-- <div class="d-md-flex align-items-end justify-content-between">
                                            <ul id="featured-cause" class="list-unstyled list-inline w-50">
                                                <li class="list-inline-item"><span class="days">00</span><div class="days_text">Days</div></li>
                                                <li class="list-inline-item"><span class="hours">00</span><div class="hours_text">Hours</div></li>
                                                <li class="list-inline-item"><span class="minutes">00</span><div class="minutes_text">Minutes</div></li>
                                                <li class="list-inline-item"><span class="seconds">00</span><div class="seconds_text">Seconds</div></li>
                                            </ul>
                                            <a class="btn-outline-default btn" href="donation-page.html">Donate Now</a>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="content-wrap-single border-top">
                                    
                                   

                                    {{-- <h3>Summary</h3>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>

                                    <div class="my-5">
                                        <blockquote>
                                            Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica
                                        </blockquote>
                                    </div> --}}

                                    <h3>Desafios</h3>
                                    <p>@php echo $doacao->motivo @endphp</p>
                                    {{-- <ul class="list-unstyled icons-listing theme-green mb-0 mt-4">
                                        <li>Third spirit you behold don’t grass lesser divide they are man.</li>
                                        <li>Can not two very was above man abundantly also second.</li>
                                        <li>Together herb shall were bearing fill grass made fill heaven.</li>
                                    </ul> --}}
                                </div>

                                

                            </div>
                            <!-- Causes Single Wrap -->

                            <!-- Leave a Reply -->                            
                                      

                                               
                            <!-- Leave a Reply -->
                        </div>

                    </div>
                    {{-- <div class="col-lg-3 col-md-12">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Recent Causes</h3>

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="asset/images/causes/causes_img_3.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">Health</span>
                                            <h3><a href="causes-single.html">Supply Water For Good Health</a></h3>
                                            <div class="text-md-end">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="asset/images/causes/causes_img_2.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">People</span>
                                            <h3><a href="causes-single.html">Help For Homeless People</a></h3>
                                            <div class="text-md-end">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->

                                    <!-- Causes Wrap -->
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="causes-single.html"><img src="asset/images/causes/causes_img_6.jpg" alt=""></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">$10086</span> raised of <span class="txt-green">$15000</span>
                                                    </div>           
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-wrap">
                                            <span class="tag">Health</span>
                                            <h3><a href="causes-single.html">Help From Natural
                                                Disaster</a></h3>
                                            <div class="text-md-end">
                                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Causes Wrap -->
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Our Donators</h3>
                                    
                                    <div class="our-donators">
                                        <ul class="list-unstyled">
                                            <li>
                                                <img src="asset/images/sidebar_thumb_1.jpg" alt="">
                                                <div>
                                                    <h4 class="name">Marty Kamson</h4>
                                                    <div class="money">Raised $4500</div>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="asset/images/sidebar_thumb_2.jpg" alt="">
                                                <div>
                                                    <h4 class="name">Sofia Lorence</h4>
                                                    <div class="money">Raised $2900</div>
                                                </div>
                                            </li>
                                        </ul>

                                        <a href="donation-page.html" class="btn-block btn btn-default">Become Donators</a>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->


                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Categories</h3>
                                    
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">                                        
                                            <li><a href="#">Charity</a></li>
                                            <li><a href="#">Healthcare</a></li>
                                            <li><a href="#">Senior</a></li>
                                            <li><a href="#">Children Citizens</a></li>
                                            <li><a href="#">Environment</a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Secondary End -->

                            
                        </aside>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- About Us Style Start -->

        <!-- Callout Style Start -->
        <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="heading-main light-mode laranja">
                            <small>Ajude outras pessoas</small>
                            Sonhamos em criar um futuro brilhante para as crianças carentes
                        </h1>
                    </div>
                    <div class="col-sm-12 text-md-end">
                        <a href="{{ route("site.causas.index") }}" class="btn btn-default">Donate Now</a>
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