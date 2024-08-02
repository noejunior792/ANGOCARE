@extends('auth.layout')
@section('titulo','Login')
@section('conteudo')

{{--  '
        'kisalo',
        'informações',
        'funcionarios', --}}

<?php
$documentos=App\Models\Documento::get();
?>
<div class="wrapper">
	<section class="login-content overflow-hidden">
	   <div class="row no-gutters align-items-center bg-white">
		  <div class="col-md-12 col-lg-6 align-self-center">
			 <a href="{{ route('login') }}" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                <div class="logo-normal">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" width="100px">
                </div>
                <h3>ANGOCARE</h3>
			 </a>
			 <div class="row justify-content-center pt-5">
				<div class="col-md-11">
				   <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
					  <div class="card-body">
						 <h2 class="mb-2 text-center">Registrar </h2>
						 <p class="text-center">Registra-se</p>
						 <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nome*</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required id="name" placeholder="Primeiro Nome">
                                    </div>
                                </div>
                        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="bi" class="form-label">BI*</label>
                                        <input type="text" class="form-control" name="bi" value="{{ old('bi') }}" required placeholder="BI">
                                        @error('bi')
                                        <span class="invalid-feedback form-control" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  aria-describedby="Telefone" placeholder="900111000">
                                        @error('email')
                                        <span class="invalid-feedback form-control" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Senha*</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" id="password" aria-describedby="password" placeholder="xxxx">
                                        @error('password')
                                        <span class="invalid-feedback form-control" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password_confirmation" class="form-label">Confirmar senha*</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirmation" id="password_confirmation" aria-describedby="password_confirmation" placeholder="xxxx">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback form-control" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="vc_nome">Tipo de Prestador*</label>
                                        <select type="text" id="tipo_estabelecimento" class="form-control" name="tipo_estabelecimento" placeholder="Nome do Estabelecimento">
                                            <option value="1"{{ old('tipo_estabelecimento') == '1' ? ' selected' : '' }}>Doador</option>
                                            <option value="2"{{ old('tipo_estabelecimento') == '2' ? ' selected' : '' }}>Necessitado</option>
                                            <option value="3"{{ old('tipo_estabelecimento') == '3' ? ' selected' : '' }}>Organização</option>
                                            <option value="4"{{ old('tipo_estabelecimento') == '4' ? ' selected' : '' }}>Empresa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="empresa" style="display: none">
                                <div class="form-card text-start">
                                    <div class="row">
                                        <div class="col-7">
                                            <h3 class="mb-4">Dados Da Empresa</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Nome da Empresa*</label>
                                                <input type="text" class="form-control" name="empresa" placeholder="Digite o nome da empresa" value="{{ old('empresa') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">NIF*</label>
                                                <input type="text" class="form-control" name="nif" placeholder="Digite o NIF da empresa" value="{{ old('nif') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="individual" style="display: none">
                                <div class="form-card text-start">
                                    <div class="row">
                                        <div class="col-7">
                                            <h3 class="mb-4">Dados Da Organização</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Nome da Organização*</label>
                                                <input type="text" class="form-control" name="nome" placeholder="Digite o nome da organização" value="{{ old('nome') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Logotipo*</label>
                                                <input type="file" class="form-control" name="logotipo">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Descrição*</label>
                                                <textarea class="form-control" name="descricao" placeholder="Digite a descrição da organização">{{ old('descricao') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.organizacao.form.step2')
                            </div>
                        
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-100">Registrar</button>
                            </div>
                        </form>
                        
                         
                         <p class="mt-3 text-center color-primary">
                            Já tens uma conta ? <a href="{{ route('login') }}" class="text-underline color-tertiary">Iniciar Sessão.</a>
                         </p>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		  <div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
			 <img src="../../assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy" >
		  </div>
	   </div>
	</section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tipoEstabelecimentoSelect = document.getElementById("tipo_estabelecimento");
        const divEmpresa = document.querySelector(".empresa");
        const divIndividual = document.querySelector(".individual");
    
        // Adicione um ouvinte de evento para detectar mudanças na seleção
        tipoEstabelecimentoSelect.addEventListener("change", function() {
            if (tipoEstabelecimentoSelect.value === "4") {
              //  Se "Empresa" for selecionado, exiba a div "empresa" e oculte a div "individual"
                divEmpresa.style.display = "block";
                divIndividual.style.display = "none";
            } else if (tipoEstabelecimentoSelect.value === "3") {
                // Se "Individual" for selecionado, exiba a div "individual" e oculte a div "empresa"
                divEmpresa.style.display = "none";
                divIndividual.style.display = "block";
            } else {
                // Se "Selecione o Tipo de Empresa" for selecionado, oculte ambas as divs
                divEmpresa.style.display = "none";
                divIndividual.style.display = "none";
            }
        });
    });
    </script>
    
        @endsection
