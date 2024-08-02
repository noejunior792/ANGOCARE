@extends('layouts.admin.index')
@section('conteudo')


<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="card" style="border-radius: 15px;">
        
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Financiamento</h4>
                </div>
            </div>
        <div class="card-body">
            <form action="{{route('financiamento.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                @include('admin.financiamento.form')
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
  <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

  @if (session('store'))
      <script>
          Swal.fire(
              'Requisização por financiamento realizado com sucesso!',
              '',
              'success'
          )
      </script>
  @endif
  @if (session('store.error'))
  <script>
      Swal.fire(
          'Error ao realizar requisição por financiamento!',
          '',
          'error'
      )
  </script>
  @endif
@endsection
