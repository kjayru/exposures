@extends('layouts.frontend.app')

@section('content')
<div class="page-wrapper chiller-theme toggled">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="wrapper">

               @include('layouts.frontend.partials.navuser')

            </div>
        </div>
        <div class="col-md-9">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
               Sus datos fueron actualizados
            </div>
        @endif
            <div class="card">
                <div class="card-header">Configuraciones</div>

                <div class="card-body">

                    <form method="POST" action="/usuario/updatedatos">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$usuario->id}}">
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $usuario->name}}" placeholder="Nombres">
                        </div>

                        <div class="form-group">
                            <label for="nombres">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ $usuario->email }}" placeholder="email">
                        </div>


                        <div class="form-group">
                          <label for="clave">Modificar clave</label>
                          <input type="password" class="form-control" name="password" id="clave" placeholder="Password">
                        </div>



                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
