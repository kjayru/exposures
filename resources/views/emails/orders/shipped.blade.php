<style>
    .container table{
        border: 1px solid #e0dcdc;
        width: 100%;
    }
    .tableproducto thead th {
    border: 1px solid #d6d6d6;
    }
    .tableproducto tbody td {
    border: 1px solid #d6d6d6;
    }


</style>
<div class="container" style="width: 820px; margin: 0 auto;background: #eee; padding: 20px;">

    <h2 style="text-align:center; font-size:25px; font-weight:bold;">Detalles del pedido - EXPOSURE</h2>
    @php
    $productDetail = null
    @endphp

     <table style="width:100%">
                 <thead>
                 <tr>
                 <th style="font-size:20px; font-weight:bold;">Datos Cliente</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                 <td>
                 <dt style="font-weight: bold;">Nombre:</dt><dl>{{ $order->user->name }}</dl>
                 <dt style="font-weight: bold;">Email:</dt><dl>{{ $order->user->email }}</dl>
                 </td>
                 </tr>
                 </tbody>
                 </table>
                 <table style="width:100%">
                 <thead>
                 <tr>
                 <th style="font-size:20px; font-weight:bold;">Dirección de Envio</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                 <td>
                 <dt style="font-weight: bold;">Nombre:</dt><dl>{{$order->billing->name." ".$order->billing->lastname}}</dl>
                 <dt style="font-weight: bold;">Dirección:</dt><dl>{{$order->billing->address1}}</dl>
                 <dt style="font-weight: bold;">Estado :</dt><dl></dl>
                 <dt style="font-weight: bold;">Ciudad :</dt><dl>{{$order->billing->city->name}}</dl>
                 </td>
                 </tr>
                 </tbody>
                 </table>


                @php $productos = unserialize($order->cart) @endphp


                    <table style="width:100%">
                     <thead>
                     <tr>
                     <th style="border: 1px solid #dad7d7;"></th>
                     <th style="border: 1px solid #dad7d7;">Producto</th>
                     <th style="border: 1px solid #dad7d7;">Cantidad</th>

                     <th style="border: 1px solid #dad7d7;">Precio Unitario</th>
                     <th style="border: 1px solid #dad7d7;">Subtotal</th>
                     </tr>
                     </thead>
                     <tbody>
                    @foreach($productos->items as $prod)

                         <tr>
                             <td style="border: 1px solid #dad7d7; width: 30%;     text-align: center;" class="mcnCaptionLeftImageContent" valign="middle" >
                            <img alt='' src="{{ env('APP_URL')."/storage/".$prod['item']->imagen }}" style="width: 100%; object-fit: contain;" class="mcnImage">
                            </td>

                            <td style="border: 1px solid #dad7d7; width: 30%; color: black!important; text-align: center;" valign="top" class="mcnTextContent" >

                            <span style="font-size:13px">

                        {{strtoupper($prod['item']->name)}}
                        </span></td>


                        <td style="border: 1px solid #dad7d7;  text-align: center;">{{$prod['qty']}} </td>
                        <td style="border: 1px solid #dad7d7;  text-align: center;">${{$prod['item']->price}}</td>
                        <td style="border: 1px solid #dad7d7;  text-align: center;">${{$prod['price']}}</td>


                    @endforeach

                     </tbody>
                     </table>
</div>
