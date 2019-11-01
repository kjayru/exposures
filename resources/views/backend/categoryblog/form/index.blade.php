
    <div class="form-group @if($errors->first('name')) has-error @endif">
        <label for="name" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text"  name="name" class="form-control" value="{{ @$categoria->name}}" id="name" placeholder="Nombre" required>
            <span class="help-block">{{ $errors->first('name') }}</span>
        </div>
    </div>


