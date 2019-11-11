@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Equipo
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Equipo</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <section class="col-lg-12  box connectedSortable">
                @if(session('info'))

                                <div class="alert alert-success">
                                    {{ session('info')}}
                                </div>

                @endif

              <form class="form-horizontal" action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Integrante</h3>
                  <a href="{{ route('post.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                </div>
                <div class="box-body">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    @include('backend.blog.form.index')
                </div>
                <div class="box-footer">
                        <a href="{{ route('post.index') }}" class="btn btn-danger">Cancelar</a>
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
