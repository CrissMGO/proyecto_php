<?php

require '../../controller/Articulos.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">






</head>
<body>
<?php
    include '../components/navbar.php';
    
    ?>

    <br><br>
    <div class="main">
        <center>

            <div class=" element sombra card articulo text-center mb-3" style="width: 50rem;">
                <div class="card-body">
                    <center>
                        <h2>NUEVO ARTICULO</h2>
                    </center>
                    <hr>


                    <form action='' method='post' enctype='multipart/form-data'>
                    <div class="row">


                        <div class="form_group col-md-12">

                            <label for="txtfoto" class="form-label">Foto</label>

                            <input type="file" class="form-control" accept="image/*" name="txtfoto" value="" id="txtfoto" require>


                        </div>

                        <br>

                       
                            <div class="form_group col-md-6">
                                <label for="tipo" class="form-label">Titulo</label>
                                <input type="text" class="form-control" value="" id="tipo" name="tipo" required>

                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>


                            </div>


                            <div class="form_group col-md-6">
                                <label for="" class="form-label"> Precio</label>
                                <input type="number" class="form-control" name="precio" value="" id="precio" required>

                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>


                    
                        <br>



                        <div class="form_group col-md-12">

                            <labelfor="" class="form-label"> Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" value="" id="descripcion" require="">
                        </div>
                        <br>

                    </div>








                </div>
                <div class="">


                    <button <?PHP echo $accionAgregar ?> value="btnagregar" type="submit" name="accion" class="btn btn-success">Agregar</button>
                    <button value="btncancelar" type="submit" name="accion" class="btn btn-danger">Cancelar</button>

                </div>
                </form>

                <br>
            </div>

            <div class="alert alert-info" role="alert" style="width: 50rem;">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16" style="color: gray;">
                    <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z" />
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                </svg> Incluye todos los detalles y las imperfecciones que ayuden a las personas a entender el estado del producto que vendes.


        </center>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>