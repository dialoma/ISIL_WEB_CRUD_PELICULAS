<?php 
include_once './controladores/funciones.php';
$bd = conexion('localhost','cine_isil','root','');
$id = $_GET['id'];
$peliculaDato = detallePelicula($bd,'movies', $id);

if ($_POST) {
    $datos = [
        'id' => $id,
        'titulo' => $_POST['titulo'],
        'premios' => $_POST['premios'],
        'fechaCreacion' => $_POST['fechaCreacion'],
        'duracion' => $_POST['duracion'],
        'genero' => $_POST['genero']
    ];
    editarPelicula($bd, 'movies', $datos);
}
?>  

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar - EP3
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><i class="bi bi-film"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registroPelicula.php">Agregar Película</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Form -->
    <div class="container">
        <h1 class="text-center mt-2 display-5 text-white">Edita una película</h1>
        <div class="w-50 m-auto shadow-lg p-3 mb-5 rounded">
            <form action="#" method="post" novalidate class="needs-validation">
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$peliculaDato['titulo']?>" required>
                    <div class="valid-feedback">Validación exitosa</div>
                    <div class="invalid-feedback">Validación fallida</div>
                </div>
                <div class="mb-3">
                    <label for="premios" class="form-label text-white">Premios</label>
                    <input type="number" class="form-control" id="premios" name="premios" value="<?=$peliculaDato['premios']?>" required>
                    <div class="valid-feedback">Validación exitosa</div>
                    <div class="invalid-feedback">Validación fallida</div>
                </div>
                <div class="mb-3">
                    <label for="fechaCreacion" class="form-label text-white">Fecha de estreno</label>
                    <input type="date" class="form-control" id="fechaCreacion" name="fechaCreacion" value="<?=$peliculaDato['fechaCreacion']?>" required>
                    <div class="valid-feedback">Validación exitosa</div>
                    <div class="invalid-feedback">Validación fallida</div>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="form-label text-white">Duración (en minutos)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion" value="<?=$peliculaDato['duracion']?>" required>
                    <div class="valid-feedback">Validación exitosa</div>
                    <div class="invalid-feedback">Validación fallida</div>
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label text-white">Género</label>
                    <input type="text" class="form-control" id="genero" name="genero" value="<?=$peliculaDato['genero']?>" required>
                    <div class="valid-feedback">Validación exitosa</div>
                    <div class="invalid-feedback">Validación fallida</div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>