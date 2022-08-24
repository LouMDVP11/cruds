<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color: #0E121F;">
    <h1 style="text-align: center; background-color: #69C3FF;">Asistencia 23/08/2022</h1>
    <h3 style="text-align: center; background-color:#121624; color:#CBCBCB">Lourdes del Valle - 202008019</h3>
    <form action="{{route('post.store')}}" method="post" style="color:#F1FFFF">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-6">
                <label for="">Titulo</label>
                <input type="text" name="title" style="text-align: center; background-color:#CBCBCB">
            </div>
            <div class="col-xs-12 col-sm-12 col-sm-6">
                </div><label for="">Url Corta</label>
                <input type="text" name="slug" style="text-align: center; background-color:#CBCBCB">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-sm-6">
                <label for="">Contenido</label>
                <textarea name="content" id="" cols="30" rows="10" style="text-align: center; background-color:#CBCBCB"></textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-sm-6">
                <label for="">Descripcion</label>
                <textarea name="description" id="" cols="30" rows="10" style="text-align: center; background-color:#CBCBCB"></textarea>
            </div>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>