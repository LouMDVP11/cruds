<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; background-color: #0E121F;">
    <h1 style="background-color: #69C3FF;">Asistencia 23/08/2022</h1>
    <h3 style="background-color:#121624; color:#CBCBCB">Lourdes del Valle - 202008019</h3>
    <form action="{{route('post.store')}}" method="post" style="color:#F1FFFF;">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title" style="background-color:#CBCBCB">
        </div><label for="">Url Corta</label>
        <input type="text" name="slug" style="background-color:#CBCBCB">
        <br><br>
        <label for="">Contenido</label>
        <textarea name="content" id="" cols="30" rows="10" style="background-color:#CBCBCB"></textarea>
        <label for="">Descripcion</label>
        <textarea name="description" id="" cols="30" rows="10" style="background-color:#CBCBCB"></textarea>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>