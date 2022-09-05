<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Categorías</title>
</head>
<body style="text-align: center; background-color: #0E121F;">
    @include('Dashboard.Partials.nav-header-main')
    <br>
    <!-- <h1 style="color: #FFF1FF;">INDEX</h1> -->
    <a class="btn btn-primary" href="{{route('categories.create')}}">Crear</a>
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
                @foreach($categories as $category) <!-- de dónde a dónde -->
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                        <td>
                            {{$category->title}}
                        </td>
                        <td>
                            {{$category->slug}}
                        </td>
                        <td>
                            {{$category->created_at->format('d-m-Y')}}
                        </td>
                        <td>
                            {{$category->updated_at->format('d-m-Y')}}
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$categories->links()}}
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>