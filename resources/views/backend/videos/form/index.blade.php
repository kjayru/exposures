
        <div class="form-group @if($errors->first('name')) has-error @endif">
            <label for="name" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text"  name="name" class="form-control" value="{{ @$video->name}}" id="name" placeholder="Nombre" required>
                <span class="help-block">{{ $errors->first('name') }}</span>
            </div>
        </div>


        <div class="form-group @if($errors->first('link')) has-error @endif">
            <label for="link" class="col-sm-2 control-label">Embed</label>
            <div class="col-sm-10">
                <input type="text"  name="link" class="form-control" value="{{ @$video->link }}" id="link" placeholder="Embed" required>
                <span class="help-block">{{ $errors->first('link') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('description')) has-error @endif">
            <label for="description" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control"  id="description" required>{{ @$video->description}}</textarea>
                <span class="help-block">{{ $errors->first('description') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('order')) has-error @endif">
            <label for="order" class="col-sm-2 control-label">Orden</label>
            <div class="col-sm-10">
                <input type="text"  name="order" class="form-control" value="{{ @$video->order}}" id="order" placeholder="Orden" required>
                <span class="help-block">{{ $errors->first('order') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('destacar')) has-error @endif">
            <label for="destacar" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    <div class="checkbox">
                            <label>
                              <input type="checkbox" name="destacar" value="1" @if(@$video->destacar==1) checked @endif> Destacar
                            </label>
                    </div>
            </div>
        </div>

