@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Marca menu
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
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

              <form class="form-horizontal" action="{{ route('marca.update',$marca->id) }}" method="POST" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar marca</h3>
                  <a href="{{ route('marca.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                </div>
                  <div class="box-body">

                    @csrf
                    <input type="hidden" name="_method" value="PUT">


                    @include('backend.marca.form.index')

                  </div>
                  <div class="box-footer">
                        <a href="{{ route('marca.index') }}" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                  </div>
              </form>


            </section>

          </div>


        </section>

      </div>



@endsection
