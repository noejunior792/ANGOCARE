@extends('layouts.site.index')
@section('titulo','Contacte-Nos')
@section('conteudo')
  <!-- Page Breadcrumbs Start -->
  <section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1>Contacte-nos</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contacte-nos</li>
                </ol>
            </nav>  
        </div>
    </div>
</section>
<!-- Page Breadcrumbs End -->

<!-- Main Body Content Start -->
<main id="body-content">

    <!-- Contact Us Style Start -->
    <section class="wide-tb-100 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <h1 class="heading-main">
                        <small>Entre em contato</small>
                        Contacte-Nos
                    </h1>

                    <p>Isso representa 14% da população mundial. Dito de outra forma, isto significa que 1 em cada 8 pessoas vivas hoje vive sem esperança entre lixo, esgoto, drogas e abuso em condições inimagináveis. A vida sem habitação segura é uma vida sem satisfação das necessidades básicas.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 col-md-12 order-lg-last">
                    <div class="contact-wrap">
                        <div class="contact-icon-xl">
                            <i class="charity-love_hearts"></i>
                        </div>
                        <div id="sucessmessage"> </div>
                        <form action="#" method="post" id="contact_form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Sobre Nome">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Numero">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-0">
                                    <div class="form-group">
                                        <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary text-nowrap">Envia-nos uma Mensagem</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <!-- Icon Boxes Style -->
                    <div class="icon-box-4 bg-orange mb-4">
                        <i data-feather="map-pin"></i>
                        <h3>Nosso Endereço</h3>
                        <div>RANGEL  - CTT - ITEL</div>
                    </div>
                    <!-- Icon Boxes Style -->

                    <!-- Icon Boxes Style -->
                    <div class="icon-box-4 bg-green mb-4">
                        <i data-feather="phone"></i>
                        <h3>Telefone</h3>
                        <div>+244 922 111 111</div>
                    </div>
                    <!-- Icon Boxes Style -->

                    <!-- Icon Boxes Style -->
                    <div class="icon-box-4 bg-gray mb-4">
                        <i data-feather="mail"></i>
                        <h3>Email</h3>
                        <div><a href="/cdn-cgi/l/email-protection#224b4c444d6243544356434b460c414d4f"><span class="__cf_email__" data-cfemail="325b5c545d7253445346535b561c515d5f">[email&#160;protected]</span></a></div>
                        <div><a href="/cdn-cgi/l/email-protection#b0c6dfdcc5dec4d5d5c2f0d1c6d1c4d1d9d49ed3dfdd"><span class="__cf_email__" data-cfemail="04726b68716a706161764465726570656d602a676b69">[email&#160;protected]</span></a></div>
                    </div>
                    <!-- Icon Boxes Style -->
                </div>
               
            </div>
        </div>
    </section>

    {{-- <section class="wide-tb-100">
        <div class="map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5516.795517377202!2d15.049412799495283!3d12.114648541083664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111961f67b29ef2d%3A0xd39cbe5e3ec7b840!2sRue%20de%20Mongo%2C%20N%27Djamena%2C%20Chad!5e0!3m2!1sen!2sjo!4v1699964474698!5m2!1sen!2sjo"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <!-- Callout Section Side Image -->
                <div class="col-sm-12">
                    <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid mb-0">
                        <div class="img-callout">
                            <img src="asset/images/callout_side_img.jpg" alt="">
                        </div>
                        <div class="text-callout">
                            <div class="d-md-flex align-items-center">
                               
                                <div class="heading">
                                    <h2>Vamos nos unir para fazer a diferença</h2>
                                </div>
                                <div class="icon">
                                    <a href="donation-page.html" class="btn btn-default">Doe Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Callout Section Side Image -->
            </div>
        </div>
    </section> --}}
    <!-- Contact Us Style Start -->


    
       
</main>

@endsection