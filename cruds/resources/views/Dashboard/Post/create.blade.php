<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="text-align: center; background-color: #0E121F;">
    <h1 style="background-color: #69C3FF;">Asistencia 23/08/2022</h1>
    <h3 style="background-color:#121624; color:#CBCBCB">Lourdes del Valle - 202008019</h3>
    
    <form action="{{route('post.store')}}" method="post" style="color:#F1FFFF;">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif    
        @csrf
        @if(session('status'))<!--  si session encuentra status -->
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @endif
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>