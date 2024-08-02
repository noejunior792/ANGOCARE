
<div class="container">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" class="form-control" name="titulo" placeholder="titulo"
                value="{{ isset($financiamento->titulo) ? $financiamento->titulo : '' }}">
        </div>
       <!-- Campos adicionados -->
        <div class="form-group col-md-6">
            <label for="valores">Valores</label>
            <input type="text" id="valores" class="form-control" name="valores" placeholder="Valores"
                value="{{ isset($financiamento->valores) ? $financiamento->valores : '' }}">
        </div>
        
   
        
        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <select class="form-select mb-3 shadow-none" name="categoria">
                <option selected disabled>Selecione a categoria</option>
                <option value="Educação">Educação</option>
                <option value="Educação">Humanidade</option>
                <option value="Educação">Água</option>
                <option value="Educação">Alimentação</option>
            </select>
            
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label fw-semibold">Usuário Responsável*</label>
                <select class="form-select mb-3 shadow-none" name="users_id">
                    @if(Auth::user()->it_tipo_utilizador==0)
                    <option selected disabled>Selecione o usuário responsável</option>
                    @endif
                    <!-- Incluir opções dinamicamente com dados de usuários -->
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ old('users_id') == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="capa">Foto de Capa</label>
            <input type="file" id="capa" class="form-control" name="capa" placeholder="capa"
                value="{{ isset($financiamento->capa) ? $financiamento->capa : '' }}">
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label fw-semibold">Descrição*</label>
                <textarea  id="summernote" name="motivo" placeholder="Digite a descrição da organização">{{ old('motivo') }} </textarea>
            </div>
        </div>
    </div>
</div>
