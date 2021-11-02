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
