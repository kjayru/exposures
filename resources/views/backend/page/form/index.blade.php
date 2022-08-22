<div class="row contenedorform">

        @foreach($page->blocks as $k=>$bloque)

            <div class="col-md-12 box">
                <label>Bloque {{ $k+1}} </label>
                <textarea id="editor{{ $k+1}}" class="contenidos" name="editor[]" rows="200" cols="80">{{$bloque->contenido }} </textarea>
            </div>

        @endforeach

    </div>
 </div>

