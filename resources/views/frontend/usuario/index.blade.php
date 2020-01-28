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
        <div class="col-md-9 historico">


                @if($ordenes)

                   @foreach($ordenes as $key => $orden)



                    <div class="card">
                        <div class="card-header">
                            <strong>Pedido Nº</strong> {{ $orden->order_send_id}} | <strong>Comprado el</strong> {{ $orden->created_at}}
                           | <strong>Total:</strong> ${{ unserialize($orden->cart)->totalPrice }}
                        </div>

                        <div class="card-body">
                            <table class="table">
                                @foreach(unserialize($orden->cart)->items as $key => $producto )
                                <tr>
                                    <td style="width:120px;">

                                        <img src="{{ $producto['item']->imagen }}" width="100" >
                                    </td>
                                    <td style="padding-top:50px;">
                                        {{ $producto['item']->name }}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                   @endforeach

                @else
                    No se registran compras

                @endif

        </div>
    </div>
</div>
</div>
@endsection
