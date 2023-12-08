<?php
include("../../config.php");

$txtid = (isset($_POST['txtid'])) ? $_POST['txtid'] : "";
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : "";
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : "";
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
$txtfoto = (isset($_FILES['txtfoto']["name"])) ? $_FILES['txtfoto']["name"] : "";
$accionAgregar = "";
$mostrarmodal = false;
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

switch ($accion) {
    case "btnagregar":
        if ($tipo == "") {
            $error['tipo'] = 'Escribe el tipo';
        }
        if ($precio == "") {
            $error['precio'] = 'Escribe el precio';
        }

        try {
            $fecha = new DateTime();
            $nombrearchivo = $txtfoto != "" ? $fecha->getTimestamp() . "_" . $_FILES["txtfoto"]["name"] : "imagen.jpeg";
            $tmpfoto = $_FILES["txtfoto"]["tmp_name"];
            if ($tmpfoto != "") {
                move_uploaded_file($tmpfoto, "../../assets/img/" . $nombrearchivo);
            }

            $sentencia = $pdo->prepare("INSERT INTO articulos (tipo, precio, descripcion, foto) VALUES (:tipo, :precio, :descripcion, :foto)");
            $sentencia->bindParam(':tipo', $tipo);
            $sentencia->bindParam(':precio', $precio);
            $sentencia->bindParam(':descripcion', $descripcion);
            $sentencia->bindParam(':foto', $nombrearchivo);

            $sentencia->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        break;

    case "editar":
        $mostrarmodal  = true;
        $accionModificar = $accionEliminar = $accionCancelar = "";

        $sentencia = $pdo->prepare("SELECT * FROM articulos WHERE id = :id");
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();

     
        if ($articulos = $sentencia->fetch(PDO::FETCH_LAZY)) {
            $tipo = $articulos['tipo'];
            $precio = $articulos['precio'];
            $descripcion = $articulos['descripcion'];
            $txtfoto = $articulos['foto'];
        } else {
           
            echo "No se encontró el registro con el ID: $txtid";
        }

        break;


    case "btnmodificar":
        try {
            $sentencia = $pdo->prepare("UPDATE articulos SET 
                    tipo = :tipo,
                    precio = :precio,
                    descripcion = :descripcion
                    WHERE id = :id");

            $sentencia->bindParam(':tipo', $tipo);
            $sentencia->bindParam(':precio', $precio);
            $sentencia->bindParam(':descripcion', $descripcion);
            $sentencia->bindParam(':id', $txtid);

            $fecha = new DateTime();
            $nombrearchivo = ($txtfoto != "" ? $fecha->getTimestamp() . "_" . $_FILES['txtfoto']["name"] : "logo.png");
            $tmpfoto = $_FILES['txtfoto']["tmp_name"];

            if ($tmpfoto != "") {
                move_uploaded_file($tmpfoto, "../../assets/img/" . $nombrearchivo);
                $sentencia = $pdo->prepare("SELECT foto FROM articulos WHERE id=:id");
                $sentencia->bindParam(':id', $txtid);
                $sentencia->execute();
                $articulos = $sentencia->fetch(PDO::FETCH_LAZY);

                if (isset($_FILES["txtfoto"])) {
                    if (file_exists("../../assets/img/" . $articulos['foto'])) {
                        unlink("../../assets/img/" . $articulos["foto"]);
                    }
                }

                $sentencia = $pdo->prepare("UPDATE articulos SET foto = :foto WHERE id = :id");
                $sentencia->bindParam(':foto', $nombrearchivo);
                $sentencia->bindParam(':id', $txtid);
                $sentencia->execute();
            }

            if ($sentencia->execute()) {
                header("location: listar.php");
            } else {
                echo "Error al modificar el registro.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        break;

    case "btneliminar":
        $sentencia = $pdo->prepare('SELECT foto FROM articulos WHERE  id=:id ');
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $articulos = $sentencia->fetch(PDO::FETCH_ASSOC);

        // Imprime el resultado de la consulta para depurar


        // Verifica si la foto existe y luego la elimina
        if (isset($_POST["txtfoto"])) {
            if (file_exists("../../assets/img/" . $articulos["foto"])) {
                unlink("../../assets/img/" . $articulos["foto"]);
            }
        }
        $sentencia = $pdo->prepare("DELETE  FROM articulos  WHERE id = :id");
        $sentencia->bindParam(':id', $txtid);
        if ($sentencia->execute()) {
        } else {
            echo "Error al eliminar el registro.";
        }
        break;




    case "btncancelar";
        header("location: listar.php");




        break;
}


if (isset($_POST['btnbuscar']) && !empty($_POST['txtbuscar'])) {
    $searchTerm = '%' . $_POST['txtbuscar'] . '%';
    $sentencia = $pdo->prepare('SELECT * FROM articulos WHERE tipo LIKE :searchTerm OR precio LIKE :searchTerm OR descripcion LIKE :searchTerm ');
    $sentencia->bindParam(':searchTerm', $searchTerm);
    $sentencia->execute();
    $listaempleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sentencia = $pdo->prepare('SELECT * FROM articulos');
    $sentencia->execute();
    $listaempleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r( $listaempleados );
}
