
<div class="container">
    
<div class="row">
<div class="form-group col-md-12">
    <label for="inputState">Nivel de acesso</label>
    <select id="vc_tipo_utilizador" class="form-control" name="vc_tipo_utilizador" style="width: 100%;" >
      <option name="vc_tipo_utilizador" value="1">Doador</option>
        <option name="vc_tipo_utilizador" value="4">Empresa</option>
        <!-- <option name="vc_tipo_utilizador" value="4">Necessitado</option> -->
        <option name="vc_tipo_utilizador" value="3">centro de caridade</option>
    </select>
  </div>
 <div class="form-group col-md-6">
    <label for="vc_path">Nome</label>
       <input type="text" id="name" class="form-control" name="name"
           placeholder="Sub-Categoria" value="{{ isset($user->name) ? $user->name : "" }}">
           @if ($errors->has('name'))
           <div class="alert alert-danger">
               {{ $errors->first('name') }}
           </div>
       @endif

 </div>
 <div class="form-group col-md-6">
    <label for="vc_path">Telefone/Email</label>
       <input type="text" id="email" class="form-control" name="email"
           placeholder="Sub-Categoria" value="{{ isset($user->email) ? $user->email : "" }}">
           @if ($errors->has('email'))
                <div class="alert alert-danger">
                      {{ $errors->first('email') }}
                </div>
            @endif

 </div>
 <div class="form-group col-md-6">
    <label for="vc_path">BI</label>
       <input type="text" id="email" class="form-control" name="bi"
           placeholder="Sub-Categoria" value="{{ isset($user->bi) ? $user->bi : "" }}">
           @if ($errors->has('bi'))
                <div class="alert alert-danger">
                      {{ $errors->first('bi') }}
                </div>
            @endif

 </div>
 <div class="form-group col-md-6">
    <label for="vc_path">Password</label>
       <input type="password" id="password" class="form-control" name="password"
           placeholder="Sub-Categoria" >
           @if ($errors->has('password'))
                <div class="alert alert-danger">
                      {{ $errors->first('password') }}
                </div>
            @endif

 </div>
 <div class="form-group col-md-6">
    <label for="vc_path">Confirmar Password</label>
       <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
           placeholder="Sub-Categoria" >
           @if ($errors->has('password_confirmation'))
                <div class="alert alert-danger">
                      {{ $errors->first('password_confirmation') }}
                </div>
            @endif
 </div>

 
 <div class="form-group col-md-6 ">

       <label for="vc_path">Imagem</label>
        <input type="file" id="vc_path" class="form-control" name="vc_path"
            placeholder="vc_path" value="{{ isset($galeria->vc_path) ? $galeria->vc_path : "" }}">
            @if ($errors->has('vc_path'))
                <div class="alert alert-danger">
                      {{ $errors->first('vc_path') }}
                </div>
            @endif
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
                                                @if ($errors->has('empresa'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('empresa') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">NIF*</label>
                                                <input type="text" class="form-control" name="nif" placeholder="Digite o NIF da empresa" value="{{ old('nif') }}">
                                                @if ($errors->has('nif'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('nif') }}
                                                    </div>
                                                @endif
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
                                                @if ($errors->has('nome'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('nome') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Logotipo*</label>
                                                <input type="file" class="form-control" name="logotipo">
                                                @if ($errors->has('logotipo'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('logotipo') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label fw-semibold">Descrição*</label>
                                                <textarea class="form-control" name="descricao" placeholder="Digite a descrição da organização">{{ old('descricao') }}</textarea>
                                                @if ($errors->has('descricao'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('descricao') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.organizacao.form.step2')
                            </div>
                        </div>
                    </div>



