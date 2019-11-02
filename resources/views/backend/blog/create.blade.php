@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Posteo
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Post</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

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

              <form class="form-horizontal" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Nuevo Post</h3>
                </div>
                <div class="box-body">

                    @csrf


                    @include('backend.blog.form.index')

                </div>
                <div class="box-footer">
                        <a href="{{ URL::previous() }}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
              </form>


            </section>

          </div>


        </section>

      </div>
      <script src="/backend/bower_components/ckeditor/ckeditor.js"></script>
      <script type="text/javascript" src="/backend/js/ckfinder/ckfinder.js"></script>
      <script>
      try {


      var editor = CKEDITOR.replace('content',{
          language: 'es',
          filebrowserBrowseUrl: '/ckfinder/browser',
          filebrowserUploadUrl: '/ckfinder/connector?command=QuickUpload&type=Files'
      });

      CKFinder.config({ connectorPath: '/ckfinder/connector' });
      CKFinder.start();
      CKFinder.widget( 'file-editor',{
             width: '100%',
             height: 700
         });

      CKFinder.setupCKEditor(editor);
      } catch (error) {
      console.log("no inicializado");
      }
       </script>


@endsection
