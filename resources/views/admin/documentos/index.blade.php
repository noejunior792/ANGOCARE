@extends('layouts.admin.index')
@section('conteudo')
<div class="content-inner container-fluid pb-0" id="page_layout">
    
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">AngoCare
                   <h4 class="card-title">Documentos</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Cadastrar Documentos

                        <svg class="size-28 hvr-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            
                        </svg>
                    </button>
                </div>
             </div>
             <div class="card-body">
               
                <div class="table-responsive">
                   <table id="input-datatable" class="table" data-toggle="data-table-column-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Documento</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                        <tr>
                            <td>{{$documento->id}}</td>
                            <td>{{$documento->documento}}</td>
                          

                            <td>
                                <a class="btn btn-sm btn-icon btn-warning rounded" data-bs-toggle="modal"data-bs-target=".bd-example-modal-xl{{$documento->id}}"  >
                                    <span class="btn-inner">
                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </a>
                                 <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Eliminar" href="{{route('admin.documento.delete', $documento->id)}}">
                                    <span class="btn-inner">
                                       <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                          <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </a>
                                </td>
                        </tr>
                       {{-- MODAL CADASTRAR USUARIO --}}
                <div class="modal fade bd-example-modal-xl{{$documento->id}}" tabindex="-1" role="dialog"   aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title">Modal title</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                             </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('admin.documento.update',$documento->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="documento" class="col-form-label">documento:</label>
                                    <input type="text" class="form-control" id="documento" name="documento" value="{{$documento->documento}}">
                                </div>
            
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button  class="btn  btn-primary" id="ajaxSubmit" >Cadastrar</button>
                                </div>
                            </form>
                          </div>
                          {{-- <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                          </div> --}}
                       </div>
                    </div>
                 </div>
                        
                        @endforeach


                    </tbody>
                      <tfoot>
                         <tr>
                            <th title="Name">Name</th>
                            <th title="Position">Position</th>
                            <th title="Office">Office</th>
                           
                         
                         </tr>
                      </tfoot>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
   
    
                </div>


                {{-- MODAL CADASTRAR USUARIO --}}
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title">Modal title</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                             </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('admin.documento.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="documento" class="col-form-label">documento:</label>
                                    <input type="text" class="form-control" id="documento" name="documento">
                                </div>
            
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button  class="btn  btn-primary" id="ajaxSubmit" >Cadastrar</button>
                                </div>
                            </form>
                          </div>
                          {{-- <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                          </div> --}}
                       </div>
                    </div>
                 </div>
   <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('delete'))
    <script>
        Swal.fire(
            'documento Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('delete.error'))
    <script>
        Swal.fire(
            'Error ao eliminar documento!',
            '',
            'error'
        )
    </script>
@endif
@if (session('update'))
<script>
    Swal.fire(
        'documento editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('update.error'))
<script>
Swal.fire(
    'Erro ao editar documento!',
    '',
    'error'
)
</script>
@endif

@if (session('store'))
<script>
    Swal.fire(
        'documento Ativado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('store.error'))
<script>
Swal.fire(
    'Erro ao cadastrar documento!',
    '',
    'error'
)
</script>
@endif              
@endsection