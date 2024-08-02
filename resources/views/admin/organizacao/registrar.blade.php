@extends('layouts.admin.index')
@section('conteudo')


<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="card" style="border-radius: 15px;">

        <div class="card-body">
            <form  action="{{ route('organizacoes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- fase dos dados pessoais -->
                @include('admin.organizacao.form.step1')
                <!-- fim -->


                <!-- fase de identificação -->
                @include('admin.organizacao.form.step2')
                <!-- fim -->

                        <input type="submit" value="Cadastrar" class="btn btn-primary">
  
              
               
            </form>
        </div>
    </div>
</div>

@include('admin.organizacao.editor')
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection
