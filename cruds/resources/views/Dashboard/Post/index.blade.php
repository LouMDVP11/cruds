<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body style="text-align: center; background-color: #0E121F;">
    @include('Dashboard.Partials.nav-header-main')
    <br>
    @csrf    <!-- <h1 style="color: #FFF1FF;">INDEX</h1> -->
    <a class="btn btn-primary" href="{{route('post.create')}}">Crear</a>
    <div class="container">
        <table class="table table-striped"  style="color:#FFFFFF;">
            <!-- cabecera -->
            <thead>
                <tr> <!-- tr = filas -->
                    <td><!-- td = Columnas -->
                        Id
                    </td>
                    <td>
                        Título
                    </td>
                    <td>
                        Ruta
                    </td>
                    <td>
                        Creación
                    </td>
                    <td>
                        Actualizado
                    </td>
                </tr>
                @foreach($posts as $post) <!-- de dónde a dónde -->
                    <tr>
                        <td>
                            {{$post->id}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{$post->slug}}
                        </td>
                        <td>
                            {{$post->created_at->format('d-m-Y')}}
                        </td>
                        <td>
                            {{$post->updated_at->format('d-m-Y')}}
                        </td>
                        <td>
                            <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-success">Editar</a>
                            <form method="POST" action="{{route('post.destroy',$post->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$posts->links()}}
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>