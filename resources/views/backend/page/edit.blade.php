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
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

            <section class="col-md-12 connectedSortable">



                    <form action="/admin/pages/{{$page->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        @include('backend.page.form.index')


                    </form>



            </section>

          </div>


        </section>

      </div>



@endsection

