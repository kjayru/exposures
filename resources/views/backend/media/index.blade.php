@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Media files
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Media files</li>
          </ol>
        </section>

<!--
        <section class="content container">
            <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Media files</h3>
                        <a href="{{route('media.create')}}" class="btn btn-xs btn-primary pull-right">Subir imagenes</a>
                    </div>
                      <div class="box-body">
                        <div class="post">
                              <div class="row">
                                  <div class="col-md-12 boxini">
                                @foreach($mediafiles as $photo)
                                <div class="gallery_product  col-lg-2 col-md-2 col-sm-2 col-xs-6 mediafile">
                                  <img class="img-responsive thumbnail" src="/storage/{{$photo->file}}" alt="Photo">
                                    <div class="botones">
                                        <a href="#"  data-id="{{$photo->id}}" class="borrar-media btn btn-xs btn-danger"> X</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                              </div>
                       </div>
                      </div>
                  </div>
                </div>
              </div>
        </section>
    -->

        <section>
            <div class="col-md-12">
                    <div class="box">
                            <div class="box-header with-border">
                              <h3 class="box-title">Galeria</h3>

                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                      <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                      <i class="fa fa-times"></i></button>
                                  </div>
                            </div>

                            <div class="box-body">


                                  <div class="post">

                                          <div class="row margin-bottom">

                                            <!-- /.col -->
                                            <div class="col-sm-12">
                                              <div class="row">
                                                <div class="file-editor" id="file-editor"></div>
                                              </div>
                                              <!-- /.row -->
                                            </div>
                                            <!-- /.col -->
                                          </div>

                                  </div>

                            </div>
                    <!-- /.box-body -->
                    </div>
              <!-- /.box -->
            </div>
        </section>
</div>


<script type="text/javascript" src="/backend/js/ckfinder/ckfinder.js"></script>
<script>
try {



CKFinder.config({ connectorPath: '/ckfinder/connector' });
CKFinder.start();
CKFinder.widget( 'file-editor',{
       width: '100%',
       height: 700
   });


} catch (error) {
console.log("no inicializado");
}
 </script>



@endsection
