<?php

require '../../controller/Articulos.php';
session_start();
$correo = $_SESSION['correo'];

if (!isset($correo)) {
  header('location:../login/login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <?php
    include '../components/navbar.php';
    
    ?>
    <br><br>




    <center>
        <div class="card element sombra " style="width: 70rem; ">
            <div class="card-body">
                <center>
                    <h2>LISTA DE ARTICULOS REGISTRADOS</h2>
                </center>
                <br>


                <table class="table articulo">
                    <thead>
                        <tr>

                            <th>Foto</th>

                            <th>Tipo</th>
                            <th>precio</th>
                            <th>descripcion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <?php foreach ($listaempleados as $articulos) { ?>

                        <tr>

                            <td> <img class="img-thumbnail" width="70px" src="../../assets/img/<?php echo $articulos['foto']; ?>"> </td>

                            <td>
                                <?php echo $articulos['tipo']; ?>
                            </td>
                            <td>
                                <?php echo $articulos['precio']; ?>
                            </td>
                            <td class="descripcion-column desc">
                                <?php echo $articulos['descripcion']; ?>
                            </td>

                            <td>
                                <form action="" method="post">

                                    <input type="hidden" name="txtid" value="<?php echo $articulos['id']; ?>">



                                    <!-- 
                                    <input type="hidden" name="txtnombres" value="<?php echo $articulos['tipo']; ?>">
                                    <input type="hidden" name="txtapellidop" value="<?php echo $articulos['precio']; ?>">
                                    <input type="hidden" name="txtapellidom" value="<?php echo $articulos['descripcion']; ?>">
                                    <input type="hidden" name="txtfoto" value="<?php echo $articulos['foto']; ?>"> -->







                                    <button class="btn btn-ligh" type="submit" name="accion" value="editar"><i class="fa fa-pencil-square" aria-hidden="true" style="color:green;">Editar</i></button>

                                    <button class="btn btn-ligh" value="btneliminar" onclick="return confirmar('¿deseas eliminar el registro?');" type="submit" name="accion"><i class="fa fa-trash" aria-hidden="true" style="color: red;">Eliminar</i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>





            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR EL ARTICULO</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form action='' method='post' enctype='multipart/form-data'>

                                <div class="form_group col-md-4">
                                    <label for="" class="form-label"> Identificacion</label>
                                    <input type="text" class="form-control" name="txtid" value="<?PHP echo "$txtid" ?>" id="txtid" readonly>
                                </div>

                                <div class="form_group col-md-12">

                                    <label for="txtfoto" class="form-label">Foto</label>
                                    <?PHP if ($txtfoto != "") { ?>

                                        <br>
                                        <img class="img-thumbnail rounded mx-auto d-block" width="130px" src="../../assets/img/<?PHP echo $txtfoto; ?>">
                                        <br>
                                        <br>

                                    <?PHP } ?>
                                    <input type="file" class="form-control" accept="image/*" name="txtfoto" value="<?PHP echo "$txtfoto" ?>" id="txtfoto" require="">
                                </div>

                                <br>

                                <div class="row">

                                    <div class="form_group col-md-6">
                                        <label for="" class="form-label"> Tipo</label>
                                        <input type="text" class="form-control   <?php echo (isset($error['tipo'])) ? "is-invalid" : ""; ?>" value="<?PHP echo "$tipo" ?>" value="" id="tipo" name="tipo" value="<?PHP echo "$tipo" ?>" id="tipo">


                                        <div class="invalid-feedback">
                                            <?php
                                            echo (isset($error['tipo'])) ? $error['tipo'] : "";
                                            ?>
                                        </div>


                                    </div>


                                    <div class="form_group col-md-6">
                                        <label for="" class="form-label"> Precio</label>
                                        <input type="number" class="form-control " name="precio" value="<?PHP echo "$precio" ?>" id="precio" require="">
                                    </div>


                                </div>
                                <br>



                                <div class="form_group col-md-12">

                                    <labelfor="" class="form-label"> Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" value="<?PHP echo "$descripcion" ?>" id="descripcion" require="">
                                </div>
                                <br>







                        </div>
                        <div class="modal-footer">


                            <button value="btnmodificar" type="submit" name="accion" class="btn btn-primary">Modificar</button>


                            <button value="btncancelar" type="submit" name="accion" class="btn btn-success">Cancelar</button>

                        </div>
                    </form>




                </div>

            </div>
        </div>


    </center>
    
    

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <?php if ($mostrarmodal) { ?>
        <script>
            const myModal = new bootstrap.Modal('#exampleModal', {
                keyboard: false
            })
            myModal.show()
        </script>
    <?php } ?>

    <script>
        function confirmar(mensaje) {
            return (confirm(mensaje)) ? true : false;
        }
    </script>
</body>

</html>