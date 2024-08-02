@extends('auth.layout')
@section('titulo','Login')
@section('conteudo')
<div class="wrapper">
	<section class="login-content overflow-hidden">
	   <div class="row no-gutters align-items-center bg-white">
		  <div class="col-md-12 col-lg-6 align-self-center">
			 <a href=".{{ route('login') }}" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
				<div class="logo-normal text-center">
                    <img src="{{ asset('assets/images/dashboard/Naamloos-2.png') }}" alt="header" width="50%">
				</div>

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
									 <label for="email" class="form-label">Email</label>
									 <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" aria-describedby="email" placeholder="xyz@example.com">
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
								  <a href="#" class="color-tertiary">Forgot Password?</a>
							   </div>
							</div>
							<div class="d-flex justify-content-center">
							   <button type="submit" class="btn btn-submit">Logar</button>
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
			 <img src="../../assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy" >
		  </div>
	   </div>
	</section>
</div>
        @endsection
