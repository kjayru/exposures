@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>


        <section class="col-lg-12  box connectedSortable">


            @if(session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                {{ session('info')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

          <form class="form-horizontal" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Producto</h3>
              <a href="{{ route('product.index') }}" class="btn btn-danger pull-right">Cancelar</a>
            </div>
              <div class="box-body">
                @csrf
                <input type="hidden" name="_method" value="PUT">

                @include('backend.product.form.index')

              </div>

              <div class="box-footer">
                <a href="{{ route('product.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
          </form>


        </section>

      </div>


     @include('layouts.backend.include.productGallery')




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


<script>


   $(function () {

    /* CKEDITOR.replace( '.contenidos', {
       height: 700
   } );*/

           CKEDITOR.replace( description, {   height: 300 });
           CKEDITOR.config.allowedContent = true;
           CKEDITOR.config.contentsCss = '/css/app.css';




   })

 </script>

@endsection
