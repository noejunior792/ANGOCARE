@extends('layouts.admin.index')
@section('conteudo')


<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="card" style="border-radius: 15px;">
        
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Produtos</h4>
                </div>
            </div>
        <div class="card-body">
            <form action="{{route('produto.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                @include('admin.produto.form')
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
