@extends('layouts.site.index')
@section('titulo','Organizações')
@section('conteudo')
{{-- @dd($organizacoes) --}}
  <!-- Page Breadcrumbs Start -->
  <section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1>Organizações que apoiam necessitados</h1>
            <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ONGs</li>
                </ol>
            </nav>  
        </div>
    </div>
</section>
<!-- Page Breadcrumbs End -->

   <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Blog Post Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    @foreach ($organizacoes as $organizacao)         
                        <!-- Blog Wrap -->
                        <div class="col-md-6 col-lg-4 col-sm-12 mb-0">                                    
                            <div class="post-wrap">
                                <div class="post-img">
                                    <a href="{{ route('site.ong.show',$organizacao->id) }}"><img src="{{ asset($organizacao->logotipo)}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    {{-- <div class="post-date">17, Aug, 2020</div> --}}
                                    <h3 class="post-title"><a href="{{ route('site.ong.show',$organizacao->id) }}">{{ $organizacao->nome }}</a></h3>
                                    <div class="post-category">{{ $organizacao->proprietario }}</div>
                                    <div class="text-md-end">
                                        <a href="{{ route('site.ong.show',$organizacao->id) }}" class="read-more-line"><span>Detalhes</span></a>
                                    </div>
                                </div>
                            </div>                                    
                        </div>
                        <!-- Blog Wrap -->
                    @endforeach
                </div>

                <div class="theme-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i data-feather="chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i data-feather="chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Blog Post End -->
           
    </main>

@endsection