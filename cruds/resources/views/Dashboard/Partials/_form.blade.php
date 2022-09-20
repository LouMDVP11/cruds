    @include('Dashboard.Partials.sesion-flash-status')
    <label for="">Titulo</label>
    <input type="text" name="title" style="background-color:#CBCBCB" value="{{old('title', $post->title)}}">
    </div><label for="">Url Corta</label>
    <input type="text" name="slug" style="background-color:#CBCBCB" value="{{old('slug', $post->slug)}}">
    <br><br>
    <label for="">Contenido</label>
    <textarea name="content" id="" cols="30" rows="10" style="background-color:#CBCBCB">{{old('content')}}</textarea>
    <br><br>
    <button class="btn btn-primary" type="submit">Enviar</button>