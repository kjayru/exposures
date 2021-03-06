@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Distribuidor

          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Distribuidor</li>
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

              <form class="form-horizontal" action="{{ route('dealer.update',$dealer->id) }}" method="POST" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Distribuidor</h3>
                  <a href="{{ route('dealer.index') }}" class="btn btn-danger pull-right">Cancelar</a>
                </div>
                <div class="box-body">

                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    @include('backend.dealer.form.index')

                </div>
                <div class="box-footer">
                        <a href="{{ route('dealer.index') }}" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
              </form>


            </section>

          </div>


        </section>



      </div>



@endsection
