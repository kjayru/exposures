@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Video

          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Video</li>
          </ol>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-md-12  box connectedSortable">

                    <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-header with-border">
                            <h3 class="box-title">Nuevo Testimonio</h3>
                            <a href="{{ route('video.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                        </div>
                        <div class="box-body">
                        @include('backend.videos.form.index')
                        </div>
                        <div class="box-footer">

                                <a href="{{ route('video.index') }}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-info pull-right">Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
</div>
@endsection
