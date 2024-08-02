@extends('layouts.auth.index')
@section('titulo','Login')
@section('conteudo')
  <!-- Page Breadcrumbs Start -->
  <div class="wrapper">
    <section class="login-content overflow-hidden">
       <div class="row no-gutters align-items-center bg-white">            
          <div class="col-md-12 col-lg-6 align-self-center">
             <a href="{{ route('login') }}" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                <div class="logo-main">
                    <div class="logo-normal">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" width="100px">
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                            <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                        </svg>
                    </div>
                </div>
				<h3>ANGOCARE</h3>
             </a>
             <div class="row justify-content-center pt-5">
				<div class="col-md-9">
				   <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
					  <div class="card-body">
						 <h2 class="mb-2 text-center">Iniciar Sessão</h2>
						 <p class="text-center">Inicie a sessão para continuares conectado.</p>
						 <form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="row">
							   <div class="col-lg-12">
								  <div class="form-group">
									 <label for="email" class="form-label">Telefone</label>
									 <input type="number" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" aria-describedby="email" placeholder="911222333">
									 @error('email')
									 <span class="invalid-feedback form-control" role="alert">
										 <strong>{{ $message }}</strong>
									 </span>
								 @enderror
									</div>

							   </div>
							   <div class="col-lg-12">
								  <div class="form-group">
									 <label for="password" class="form-label">Password</label>
									 <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" id="password" aria-describedby="password" placeholder="xxxx">
									 @error('password')
									 <span class="invalid-feedback form-control" role="alert">
										 <strong>{{ $message }}</strong>
									 </span>
								 @enderror
									</div>
							   </div>
							   <div class="col-lg-12 d-flex justify-content-between">
								  <div class="form-check mb-3">
									 <input type="checkbox" class="form-check-input" id="customCheck1">
									 <label class="form-check-label" for="customCheck1">Remember Me</label>
								  </div>
								  {{-- <a href="#" class="color-tertiary">Forgot Password?</a> --}}
							   </div>
							</div>
							<div class="d-flex justify-content-center">
							   <button type="submit" class="btn btn-primary">Logar</button>
							</div>
							<!-- <p class="text-center my-3">or sign in with other accounts?</p> -->
							<!-- <div class="d-flex justify-content-center">
							   <ul class="list-group list-group-horizontal list-group-flush">
								  <li class="list-group-item border-0 pb-0">
									 <a href="#"><img src="../../assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
								  </li>
								  <li class="list-group-item border-0 pb-0">
									 <a href="#"><img src="../../assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
								  </li>
								  <li class="list-group-item border-0 pb-0">
									 <a href="#"><img src="../../assets/images/brands/im.svg" alt="im" loading="lazy"></a>
								  </li>
								  <li class="list-group-item border-0 pb-0">
									 <a href="#"><img src="../../assets/images/brands/li.svg" alt="li" loading="lazy"></a>
								  </li>
							   </ul>
							</div> -->
							<p class="mt-3 text-center color-primary">
							   Não tens conta ? <a href="{{ route('register') }}" class="text-underline color-tertiary">Registrar-se.</a>
							</p>
						 </form>
					  </div>
				   </div>
				</div>
			 </div>
          </div>
          <div class="col-lg-6 d-lg-block d-none  p-0  overflow-hidden">
            <img src="{{ asset('assets/images/auth/01.png') }}" class="img-fluid gradient-main" alt="images" loading="lazy" >
         </div>
       </div>
    </section>
  </div>
@endsection
