@extends('layouts.site.index')
@section('titulo','Detalhes sobre a Organização')
@section('conteudo')
    <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>{{ $organizacao->nome }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Organização</li>
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
                                <small>Apoia-nos</small>
                                {{ $organizacao->nome }}
                            </h1>
                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <span class="tag-single">Organização</span>
                                    <img src="{{ asset($organizacao->logotipo) }}" alt="">
                                </div>

                                

                                <div class="content-wrap-single border-top">
                                    
                                 

                                    <h3>Summary</h3>
                                    <p>@php
                                        echo "$organizacao->descricao"
                                    @endphp</p>

                                    
                                </div>

                                <div class="share-this-wrap">
                                    <a href="{{ route('site.doar.index3',$organizacao->id) }}" class="btn btn-default text-nowrap">Doar Recursos Financeiros</a>

                                    <a href="{{ route('site.doar.index4',$organizacao->id) }}" class="btn btn-default text-nowrap">Doar Recursos Materias</a>

                            </div>
                            <!-- Causes Single Wrap -->
                   
                            <!-- Leave a Reply -->
                        </div>

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
                        <h1 class="heading-main light-mode">
                            <small>Help Other People</small>
                            We Dream to Create A Bright Future Of The Underprivileged Children
                        </h1>
                    </div>
                    <div class="col-sm-12 text-md-end">
                        <a href="#" class="btn btn-default">Donate Now</a>
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