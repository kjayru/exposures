
        <div class="form-group @if($errors->first('name')) has-error @endif">
            <label for="name" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text"  name="name" class="form-control" value="{{ @$dealer->name}}" id="name" placeholder="Nombre" required>
                <span class="help-block">{{ $errors->first('name') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('subtitle')) has-error @endif">
                <label for="subtitle" class="col-sm-2 control-label">Subtitulo</label>
                <div class="col-sm-10">
                    <input type="text"  name="subtitle" class="form-control" value="{{ @$dealer->subtitle}}" id="subtitulo" placeholder="Subtitulo" required>
                    <span class="help-block">{{ $errors->first('subtitle') }}</span>
                </div>
            </div>


        <div class="form-group @if($errors->first('description')) has-error @endif">
            <label for="description" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
                <textarea cols="30" rows="15"  name="description" class="form-control"  id="description">{{ html_entity_decode(@$dealer->description) }}</textarea>
                <span class="help-block">{{ $errors->first('description') }}</span>
            </div>
        </div>




        <div class="form-group @if($errors->first('address')) has-error @endif">
            <label for="address" class="col-sm-2 control-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text"  name="address" class="form-control" value="{{ @$dealer->address}}" id="address" placeholder="Dirección" required>
                <span class="help-block">{{ $errors->first('address') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('phone')) has-error @endif">
            <label for="phone" class="col-sm-2 control-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text"  name="phone" class="form-control" value="{{ @$dealer->phone}}" id="phone" placeholder="Teléfono" required>
                <span class="help-block">{{ $errors->first('phone') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('email')) has-error @endif">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text"  name="email" class="form-control" value="{{ @$dealer->email}}" id="email" placeholder="Email" required>
                <span class="help-block">{{ $errors->first('email') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('maps')) has-error @endif">
                <label for="maps" class="col-sm-2 control-label">Mapa</label>
                <div class="col-sm-10">
                    <textarea  name="maps" class="form-control" id="maps" required>{!! html_entity_decode(@$dealer->maps) !!}</textarea>
                    <span class="help-block">{{ $errors->first('maps') }}</span>
                </div>
        </div>

        <div class="form-group @if($errors->first('order')) has-error @endif">
                <label for="order" class="col-sm-2 control-label">Número de orden</label>
                <div class="col-sm-10">
                    <input type="text"  name="order" class="form-control" value="{{ @$dealer->order}}" id="order" placeholder="Orden" required>
                    <span class="help-block">{{ $errors->first('order') }}</span>
                </div>
        </div>
        <div class="form-group">
            <label for="state" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-10">
                <select name="state" id="state" class="form-control">
                <option value="">Seleccione</option>
                @foreach($estados as $estado)
                <option value="{{ $estado->id }}" @if(@$dealer->state_id == $estado->id) selected @endif>{{ $estado->name }}</option>
                @endforeach
                </select>
            </div>
        </div>

