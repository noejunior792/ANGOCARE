@extends('layouts.admin.index')
@section('conteudo')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
        <div class="row">
            <!-- Tabela de dados -->
            <div class="col-sm-12">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Documentos</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive border rounded">
                            <table id="datatable" class="table " data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                  
                                        <th>Nome</th>
                                        <th>Documento</th>
                                     
                                    </tr>
                                </thead>
                                {{-- @dd($organizacoes) --}}
                                <tbody>
                                   @foreach ($files as $file)
                                       <tr>
                                        <td>{{ $file->id }}</td>
                                        <td>{{ $file->nome }}</td>
                                        <td><a href="{{ asset( $file->documento) }}"> <svg class="icon-32 text-info" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76175H8.08493C6.00493 2.75375 4.29993 4.41175 4.25093 6.49075V17.2037C4.20493 19.3167 5.87993 21.0677 7.99293 21.1147C8.02393 21.1147 8.05393 21.1157 8.08493 21.1147H16.0739C18.1679 21.0297 19.8179 19.2997 19.8029 17.2037V8.03775L14.7379 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14.2882 15.3584H8.88818" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.2432 11.606H8.88721" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></a></td>
                                        
                                       </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
