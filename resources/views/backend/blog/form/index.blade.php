<div class="form-group @if($errors->first('title')) has-error @endif">
    <label for="title" class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-10">
        <input type="text"  name="title" class="form-control" value="{{ @$post->title}}" id="title" placeholder="Titulo" required>
        <span class="help-block">{{ $errors->first('title') }}</span>
    </div>
</div>

<div class="form-group @if($errors->first('excerpt')) has-error @endif">
    <label for="excerpt" class="col-sm-2 control-label">Resumen</label>
    <div class="col-sm-10">
        <textarea  name="excerpt" class="form-control" rows="10" id="excerpt"  required>{{ @$post->excerpt}}</textarea>
        <span class="help-block">{{ $errors->first('excerpt') }}</span>
    </div>
</div>

<div class="form-group @if($errors->first('content')) has-error @endif">
    <label for="content" class="col-sm-2 control-label">Contenido</label>
    <div class="col-sm-10">
        <textarea  name="content" class="form-control" rows="30"  id="content"  required>{{ @$post->content}}</textarea>
        <span class="help-block">{{ $errors->first('content') }}</span>
    </div>
</div>

<div class="form-group @if($errors->first('content')) has-error @endif">
    <label for="categoria" class="col-sm-2 control-label">Categoria</label>
    <div class="col-sm-10">
        <select name="category_blog_id" id="category_blog_id" class="form-control">
            <option value="">Seleccione</option>
            @foreach ($categorias as $item)
                <option value="{{ $item->id }}" @if(@$post->category_blog_id == @$item->id) selected @endif>{{ $item->name }}</option>
            @endforeach

        </select>
        <span class="help-block">{{ $errors->first('content') }}</span>
    </div>
</div>

<div class="form-group @if($errors->first('facebook')) has-error @endif">
    <label for="facebook" class="col-sm-2 control-label">Facebook</label>
    <div class="col-sm-10">
        <input type="text"  name="facebook" class="form-control" value="{{ @$post->facebook}}" id="facebook" placeholder="Facebook" >
        <span class="help-block">{{ $errors->first('facebook') }}</span>
    </div>
</div>

<div class="form-group @if($errors->first('instagram')) has-error @endif">
    <label for="instagram" class="col-sm-2 control-label">Instagram</label>
    <div class="col-sm-10">
        <input type="text"  name="instagram" class="form-control" value="{{ @$post->instagram}}" id="instagram" placeholder="Instagram" >
        <span class="help-block">{{ $errors->first('instagram') }}</span>
    </div>
</div>

@if(!@$post->foto)
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
            <img src="/storage/{{ @$post->foto }}"  class="img-thumbnail img-responsive" >

            <a href="#" class="btn-modificar-foto btn btn-xs btn-primary">Modificar</a>
        </div>

        <input type=file name="foto"  id="foto" class="form-control" style="display: none">
        <span class="help-block">{{ $errors->first('foto') }}</span>
    </div>

</div>
@endif



