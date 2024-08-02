<!doctype html>
<html lang="en">
<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- xxx Change With Your Information xxx -->    
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>@yield('titulo')</title>
    <meta name="author" content="Mannat Studio">     
    <meta name="description" content="Charity">
    <meta name="keywords" content="Charity">
    <!-- Primary Meta Tags -->
    <meta name="title" content="AVAT Aid" />
    <meta name="description" content="Charity" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://avataid.com/" />
    <meta property="og:title" content="Avat Aid" />
    <meta property="og:description" content="Charity" />
    <meta property="og:image" content="https://avataid.com/assets/images/seo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://avataid.com/" />
    <meta property="twitter:title" content="Avat Aid" />
    <meta property="twitter:description" content="Charity" />
    <meta property="twitter:image" content="https://avataid.com/assets/images/seo.png" />
    @include('layouts.site.links')
  
</head>
<body>

    <!-- Page loader Start -->
    <div id="pageloader">   
        <div class="loader-item">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
              </div>
        </div>
    </div>
    <!-- Page loader End -->

    <!-- Header Start -->
    @include('layouts.site.nav')
    <!-- Header Start -->

{{-- Corpo do Site Inicio --}}
    @yield('conteudo')
{{-- Corpo do Site Fim --}}
    <!-- Main Footer Start -->
  @include('layouts.site.footer')
    <!-- Main Footer End -->

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">    
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-auto">
                        <i class="icofont-search"></i>
                    </div> 
                    <div class="col">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-auto">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
    <!-- Back To Top End -->
@include('layouts.site.doacao')
   @include('layouts.site.scripts')
   
</body>
</html>