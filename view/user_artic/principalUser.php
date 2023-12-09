<?php

require '../../controller/Articulos.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/styleUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>



<body>

    <?php
    include '../components/user_navbar.php';

    ?>


    <br>



    <h2>
        <center>NUESTROS PRODUCTOS</center>
    </h2>
    <br>

    <div class="row mx-auto" style="width: 90%; height: 90%;">
        <?php foreach ($listaempleados as $articulos) { ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="img-thumbnail" style="width: 100%; height: 200px; object-fit: cover;" src="../../assets/img/<?php echo $articulos['foto']; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $articulos['tipo']; ?></h4>
                        <p class="card-text"><?php echo $articulos['descripcion']; ?></p>
                        <h5 class="card-title"><?php echo "$" . $articulos['precio']; ?></h5>
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Añadir</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


    <br><br>
    <?php
    include '../components/footer.php';

    ?>





    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>