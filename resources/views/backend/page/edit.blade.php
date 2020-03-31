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
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/pages"><i class="fa fa-dashboard"></i> Paginas</a></li>
            <li class="active">Pagina</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

            <section class="col-md-12 connectedSortable">



                    <form action="/admin/pages/{{$page->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        @include('backend.page.form.index')


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>



            </section>

          </div>


        </section>

      </div>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


 <script>


    $(function () {

     /* CKEDITOR.replace( '.contenidos', {
        height: 700
    } );*/

         $('.contenidos').each(function(e){
            CKEDITOR.replace( this.id, {   height: 300 });
            CKEDITOR.config.allowedContent = true;
            CKEDITOR.config.contentsCss = '/css/app.css';

        });


    })

  </script>

@endsection
