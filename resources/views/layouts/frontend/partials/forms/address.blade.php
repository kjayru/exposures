
<div class="modal fade" id="ModalBilling" tabindex="-1" role="dialog" aria-labelledby="ModalBillingLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaladdprodLabel">

              <span class="billing-titulo">Editar dirección</span>
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <form name="address" id="frm-address" method="post">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="tipo" value="nuevo">
                <div class="col-xs-12 col-md-12">
                    <label class="form-label required" for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required="required"   class="form-control">
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label required" for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required="required"   class="form-control">
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label required" for="celular">Teléfono Celular</label>
                      <input type="text" id="celular" name="celular" required="required"  mask="999999999"  class="form-control" >
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label" for="telefono">Otro Teléfono (opcional)</label>
                      <input type="text" id="telefono" name="telefono"    class="form-control" >
                </div>

                <div class="col-xs-12 col-md-12">
                    <label class="form-label required" for="email">Email</label>
                    <input type="text" id="email" name="email" required="required"   class="form-control">
                </div>


                <div class="col-xs-12 col-md-12">
                      <label class="form-label required" for="direccion">Dirección</label>
                      <input type="text" id="direccion" name="direccion" required="required"  maxlength="250" class="form-control">
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label required" for="ciudad">Ciudad</label>

                      <select name="ciudad" id="ciudad" class="form-control">

                        <option value="">Seleccione</option>

                        @foreach($ciudades as $ciudad)

                        <option value="{{$ciudad->id}}">{{ $ciudad->name }}</option>

                        @endforeach
                      </select>
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label" for="estado">Estado</label>
                      <input type="text" id="estado" name="estado" class="form-control">
                </div>

                <div class="col-xs-12 col-md-12">
                      <label class="form-label" for="zipcode">Código postal</label>
                      <input type="text" id="zipcode" name="zipcode"   class="form-control">
                </div>



            </form>



        </div>
        <div class="modal-footer">

            <button type="button" class="btn  btn-primary btn-save-billing" >Guardar</button>
        </div>
      </div>
    </div>
  </div>




