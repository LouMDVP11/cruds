@include('Dashboard.Partials.sesion-flash-status')
<label for="">Titulo</label>
<input type="text" name="title" style="background-color:#CBCBCB" value="{{old('title', $category->title)}}">
</div><label for="">Url Corta</label>
<input type="text" name="slug" style="background-color:#CBCBCB" value="{{old('slug', $category->slug)}}">
<br><br>
<button type="submit">Enviar</button>