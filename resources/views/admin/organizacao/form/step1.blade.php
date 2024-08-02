<div class="form-card text-start">
    <div class="row mb-5">
        <div class="col-7">
            <p class="steps fs- mb-0">Fase 1 - 4</p>
            <h3 class="mb-4">Dados Pessoais</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label fw-semibold">Nome da Organização*</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome da organização" value="{{ isset($organizacao) ?  $organizacao->nome : old('nome') }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label fw-semibold">Logotipo*</label>
                <input type="file" class="form-control" name="logotipo" value="{{ isset($organizacao) ?  $organizacao->logotipo : old('logotipo') }}">>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label fw-semibold">Descrição*</label>
                <textarea  id="summernote" name="descricao" placeholder="Digite a descrição da organização">{{ isset($organizacao) ?  $organizacao->descricao : old('descricao') }}"</textarea>
            </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label fw-semibold">Usuário Responsável*</label>
                <select class="form-select mb-3 shadow-none" name="users_id">
                    <option selected disabled>Selecione o usuário responsável</option>
                    <!-- Incluir opções dinamicamente com dados de usuários -->
                    @isset($organizacao->user_id)
                    <option value="{{ $organizacao->user_id }}" selected>{{$organizacao->user }}</option>
                    @endisset
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ old('users_id') == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Adicione aqui os campos adicionais necessários -->
        </div>
    </div>
</div>
