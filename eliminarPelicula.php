<?php 
  include_once './controladores/funciones.php';
  $bd = conexion('localhost','cine_isil','root','');
  $id = $_GET['id'];
  $pelicula = eliminarPelicula($bd, 'movies', $id);
?>  
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elimar Pelicula - EP3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body class="bg-dark">

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

    <!--Message -->
    <div class="row d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <?php if($pelicula === 1): ?>
            <h1 class="text-center display-4 mb-4 text-white">Registro eliminado exitosamente</h1>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <?php if($pelicula === 1): ?>
            <a class="btn btn-danger btn-lg w-25" href="./index.php">Volver</a>
            <?php endif; ?>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>