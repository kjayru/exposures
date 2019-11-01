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


        <section class="content container">






              <div class="row">

                <div class="col-xs-12">
                  <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Media files</h3>
                        <a href="{{route('media.create')}}" class="btn btn-xs btn-primary pull-right">Subir imagenes</a>
                    </div>
                    <!-- /.box-header -->
                      <div class="box-body">

                        <div class="post">

                          <!-- /.user-block -->

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

                          <!-- /.row -->

                        </div>

                      </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->


                </div>

              </div>




        </section>

      </div>



@endsection
