 <!-- Header Start -->
 <header class="header-style-fullwidth">
    <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center contact-info">
                    <div>
                        <i data-feather="phone"></i>  <a href="tel:+244911111111">+244911111111</a>
                    </div>
                    <div>
                        <i data-feather="mail"></i>  <a href="/cdn-cgi/l/email-protection#dab3b4bcb59abbacbbaebbb3bef4b9b5b7"><span class="__cf_email__" >angocare@gmail.com</span></a>
                    </div>
                  
                </div>

                {{-- <div class="col-md-auto">
                    <div class="social-icons">
                        <a href="#"><i class="icofont-facebook"></i></a>
                        <a href="#"><i class="icofont-twitter"></i></a>
                        <a href="#"><i class="icofont-instagram"></i></a>
                        <a href="#"><i class="icofont-behance"></i></a>
                        <a href="#"><i class="icofont-youtube-play"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg header-fullpage">
        <div class="container text-nowrap">
            <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                    <img src="assets/images/logo_white.svg" alt="">
                </a> 
            </div>
            <!-- Topbar Buttons Start -->
            <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center"> 
                <a class="btn-outline-primary btn ms-3" href="#" id="search_home"><i data-feather="search"></i></a>

                <a class="nav-link btn btn-default ms-3 donate-btn" href="{{ route('site.causas.index') }}">Doar</a>

                <!-- Toggle Button Start -->
                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Button End -->
            </div>
            <!-- Topbar Buttons End -->
            
            <div class="navbar-collapse">
                <!-- Mobile Logo -->
                <div class="offcanvas-header">
                    <a href="index.html" class="logo-small">
                        <img src="assets/images/logo_white.svg" alt="">
                    </a>                        
                </div>
                <!-- Mobile Logo -->
                <!-- Mobile Menu -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.home.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.sobre.index') }}">Sobre Nós</a>
                        </li>
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('site.causas.index') }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedidos de Ajuda </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('site.causas.index') }}">Recursos Financeiros</a></li>
                                <li><a class="dropdown-item" href="{{ route('site.causas.index2') }}">Recursos Materias</a></li>

                            </ul>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.ong.index') }}">ONGs</a>
                        </li>
                   
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.contacte.index') }}">Contacte-Nos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">Perfil</a>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Iniciar Sessão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}">Registrar-se</a>
                        </li>
                        @endguest
                      
                        
                    </ul>
                </div>
                <!-- Mobile Menu -->
                <div class="close-nav"></div>
                <!-- Main Navigation End -->
            </div>
        </div>
    </nav>
    <!-- Main Navigation End -->
</header>
<!-- Header Start -->