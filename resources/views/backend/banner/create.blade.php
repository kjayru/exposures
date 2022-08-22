@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Categoria
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Categoria</li>
          </ol>
        </section>


        <section class="col-lg-12  box connectedSortable">


            @if(session('info'))

                            <div class="alert alert-success">
                                {{ session('info')}}
                            </div>

            @endif

          <form class="form-horizontal" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Categoria</h3>
              <a href="{{ route('category.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
              <div class="box-body">

                @csrf


                @include('backend.category.form.index')

              </div>
              <div class="box-footer">
                    <a href="{{ URL::previous() }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
          </form>


        </section>

      </div>



@endsection
