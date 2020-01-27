<div class="option-card option-card-deck col-xs-12 col-sm-6 col-md-4" data-id="{{$bill->id}}" data-userid="{{ $bill->user_id}}">

    <label for="shipping-{{$bill->id}}"  class="hide-radio">
        <div class="clearfix">
        {{ $bill->name }} {{ $bill->lastname }}
        </div>

        <address class="address" >
            {{ $bill->address1 }}<br>
            {{ $bill->city->name }} - {{ $bill->colony }} - {{ $bill->zipcode }}<br>
            Teléfono: {{ $bill->phone }} - {{ $bill->other_phone }}
        </address>

        <div class="opcion">
            <input type="radio" id="determinado{{$key+1}}" name="determinado" class="inputdeterminado" value="1" @if($bill->status==1) checked @endif>
                <label class="radio-item" for="determinado" >

                    <div class="shipping-quote-title clearfix">
                        @if($bill->status==1)
                        Dirección predeterminada
                        @else
                        Seleccionar
                        @endif
                    </div>

                </label>
        </div>

        <div class="option-card-footer">
            <a class="btn btn-sm btn-edit-address btn-primary" href="#" data-id="{{$bill->id}}" data-tipo="editar">Editar</a>
            <!--<a class="btn btn-sm btn-delete-address btn-primary" href="#" data-id="">Eliminar</a>-->
        </div>
    </label>
</div>
