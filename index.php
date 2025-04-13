<?php 
  include_once './controladores/funciones.php';
  $bd = conexion('localhost','cine_isil','root','');
  $peliculas = buscarPeliculas($bd,'movies');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index - EP3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <!-- navbar -->
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


    <!-- carousel -->
    <div class="fixedHeight">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                <img src="https://ca-times.brightspotcdn.com/dims4/default/b439391/2147483647/strip/true/crop/4096x2160+0+0/resize/1200x633!/format/webp/quality/75/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fd3%2F7a%2F33a466b14bdc927a58a1bf26129f%2Frev-1-gxk-fp-001rv3-high-res-jpeg.jpeg" class="d-block mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src="https://nomusica.com/wp-content/uploads/2024/06/Netflix-Atlas-Movie.jpg" class="d-block mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src="https://img2.rtve.es/i/?w=1600&i=1262724549875.jpg" class="d-block mx-auto" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="container my-4">
      <h2 class="text-center mb-4 text-white">Películas Registradas</h2>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Borrar</th>
          </tr>
        </thead>
        <tbody>
        
          <?php 
            foreach ($peliculas as $i => $pelicula):?> 
            <tr>
              <th scope="row"><?=$pelicula['id']?></th>
              <td><?= $pelicula['titulo']?></td>
              <td><a class="btn btn-success" href="detallePelicula.php?id=<?=$pelicula['id']?>"><i class="bi bi-eye-fill"></i></a></td>
              <td><a class="btn btn-primary" href="editarPelicula.php?id=<?=$pelicula['id']?>"><i class="bi bi-pencil-fill"></i></a></td>
              <td><a class="btn btn-danger" href="eliminarPelicula.php?id=<?=$pelicula['id']?>"><i class="bi bi-trash-fill"></i></a></td>
            </tr>    
          <?php endforeach;?>


        </tbody>
      </table>
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>