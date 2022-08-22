
        <div class="form-group @if($errors->first('nombre')) has-error @endif">
            <label for="nombre" class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-10">
                <input type="text"  name="nombre" class="form-control" value="{{ @$testimony->nombres}}" id="name" placeholder="Nombre" required>
                <span class="help-block">{{ $errors->first('nombre') }}</span>
            </div>
        </div>



        @if(!@$testimony->foto)

            <div class="form-group @if($errors->first('foto')) has-error @endif">
                <label for="foto" class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-10">
                    <input type=file name="foto"  id="foto" class="form-control">
                    <span class="help-block">{{ $errors->first('foto') }}</span>
                </div>
            </div>

        @else

            <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-10">
                    <div class="thumbnail">
                        <img src="/storage/{{ @$testimony->foto }}"  class="img-thumbnail img-responsive" alt="" srcset="">
                        <a href="#" class="btn-modificar-imagen btn btn-xs btn-primary">Modificar</a>
                    </div>
                    <input type=file name="foto"  id="foto" class=" form-control" style="display: none">
                    <span class="help-block">{{ $errors->first('foto') }}</span>
                </div>
            </div>

        @endif


        <div class="form-group @if($errors->first('categoria')) has-error @endif">
            <label for="categoria" class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-10">
                <input type="text"  name="categoria" class="form-control" value="{{ @$testimony->categoria }}" id="categoria" placeholder="Categoria" required>
                <span class="help-block">{{ $errors->first('categoria') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('categoria')) has-error @endif">
            <label for="testimonio" class="col-sm-2 control-label">Testimonio</label>
            <div class="col-sm-10">
                <textarea name="testimonio" class="form-control"  id="testimonio" required>{{ @$testimony->testimonio}}</textarea>
                <span class="help-block">{{ $errors->first('testimonio') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('facebook')) has-error @endif">
            <label for="nombre" class="col-sm-2 control-label">Facebook</label>
            <div class="col-sm-10">
                <input type="text"  name="facebook" class="form-control" value="{{ @$testimony->facebook}}" id="facebook" placeholder="Facebook" required>
                <span class="help-block">{{ $errors->first('facebook') }}</span>
            </div>
        </div>

        <div class="form-group @if($errors->first('twitter')) has-error @endif">
            <label for="nombre" class="col-sm-2 control-label">Twitter</label>
            <div class="col-sm-10">
                <input type="text"  name="twitter" class="form-control" value="{{ @$testimony->twitter}}" id="twitter" placeholder="Twitter" required>
                <span class="help-block">{{ $errors->first('twitter') }}</span>
            </div>
        </div>

