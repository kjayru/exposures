@extends('layouts.frontend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="wrapper">

                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Wile Tinoco</h3>
                    </div>

                    <ul class="list-unstyled components">


                        <li>
                            <a href="#">Historial de compras</a>
                        </li>

                        <li>
                            <a href="#">Configuración</a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>

            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Historial de compras</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    No se registran compras


                    <table class="table">
                        <tr></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
