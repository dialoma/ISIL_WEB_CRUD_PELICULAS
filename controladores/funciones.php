<?php 

 //Función para conectar a la BD
 function conexion($host,$bd,$usuario,$clave){
    try {
      $mbd = new PDO("mysql:host=$host;dbname=$bd", $usuario, $clave);
      return $mbd;
    } catch (PDOException $e) {
      echo "¡Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  //Función para buscar peliculas
  function buscarPeliculas($bd,$tabla){
    //Armar la consulta
    $sql = "select * from $tabla";
    //Preparar la consulta
    $query = $bd->prepare($sql);
    //Ejecutar la consulta
    $query->execute();
    //Traer los datos de la consulta
    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
    return $peliculas;
  }

  //Función de mostrar el detalle de la pelicula
  function detallePelicula($bd,$tabla,$id){
    //Armar la consulta
    $sql = "select * from $tabla where id = $id";
    //Preparar la consulta
    $query = $bd->prepare($sql);
    //Ejecutar la consulta
    $query->execute();
    //Traer los datos de la consulta
    $peliculas = $query->fetch(PDO::FETCH_ASSOC);
    return $peliculas;
  }

  //Función para guardar los datos en la tabla movies
  function guardarPelicula($bd,$tabla,$datos){
    //Armar los datos a guardar
    $titulo = $datos['titulo'];
    $premios = $datos['premios'];
    $fechaCreacion = $datos['fechaCreacion'];
    $duracion = $datos['duracion'];
    $genero = $datos['genero'];

    //Armar la consulta
    $sql = "insert into $tabla (titulo,premios,fechaCreacion,duracion,genero) values (:titulo,:premios,:fechaCreacion,:duracion,:genero)";

    //Preparar la consulta
    $query = $bd->prepare($sql);
    $query->bindValue(':titulo',$titulo);
    $query->bindValue(':premios',$premios);
    $query->bindValue(':fechaCreacion',$fechaCreacion);
    $query->bindValue(':duracion',$duracion);
    $query->bindValue(':genero',$genero);

    //Ejecutar la consulta
    $query->execute();
    header('location: index.php');
  }


   //Función para eliminar el pelicula
   function eliminarPelicula($bd,$tabla,$idEliminar){
    //Armar los datos a guardar
    $id = $idEliminar;
    //Armar la consulta
    $sql = "delete from $tabla where id = :id";
    //Preparar la consulta
    $query = $bd->prepare($sql);
    $query->bindValue(':id',$id);
    //Ejecutar la consulta
    $query->execute();
    $fila = $query->rowCount(); 
    return $fila;
  }

    //Función para actualizar los datos en la tabla movies
    function editarPelicula($bd, $tabla, $datos) {
    //Armar los datos a actualizar
    $id = $datos['id'];
    $titulo = $datos['titulo'];
    $premios = $datos['premios'];
    $fechaCreacion = $datos['fechaCreacion'];
    $duracion = $datos['duracion'];
    $genero = $datos['genero'];

    //Armar la consulta
    $sql = "UPDATE $tabla 
            SET titulo = :titulo, premios = :premios, fechaCreacion = :fechaCreacion, duracion = :duracion, genero = :genero 
            WHERE id = :id";

    //Preparar la consulta
    $query = $bd->prepare($sql);
    $query->bindValue(':titulo', $titulo);
    $query->bindValue(':premios', $premios);
    $query->bindValue(':fechaCreacion', $fechaCreacion);
    $query->bindValue(':duracion', $duracion);
    $query->bindValue(':genero', $genero);
    $query->bindValue(':id', $id);

    //Ejecutar la consulta
    $query->execute();
    header('location: index.php');
}

?>