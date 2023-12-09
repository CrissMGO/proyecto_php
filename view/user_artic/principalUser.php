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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="../../assets/js/funcion_car.js"></script>

</head>

<body>

    <body>

        <?php
        include '../components/user_navbar.php';

        ?>

        <div class="encabezado-img">
            <h1>TOOLS STORE</h1>
            <p>Descubre las herramientas perfectas para potenciar tu trabajo</p>
        </div>

        <br>
        <br>




        <h2>
            <center>NUESTROS PRODUCTOS</center>
        </h2>
        <br>


        <section class="contenedor">

            <div class="contenedor-items">
                <?php foreach ($listaempleados as $articulos) { ?>
                    <div class="item " style="width: 250px !important;">

                        <h5 class="titulo-item"><?php echo $articulos['tipo']; ?></h5>
                        <img class="img-thumbnail" style="width: 100%; height: 200px; object-fit: cover;" src="../../assets/img/<?php echo $articulos['foto']; ?>">
                        <img src="img/boxengasse.png" alt="" class="img-item">
                        <p class="card-text"><?php echo $articulos['descripcion']; ?></p>
                        <span class="precio-item"><?php echo "$" . $articulos['precio']; ?></span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                <?php } ?>
            </div>

            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>

                <div class="carrito-items">

                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.000,00
                        </span>
                    </div>
                    <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
                </div>
            </div>
        </section>
        <br>

        <?php
        include '../components/footer.php';

        ?>

        




        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    </body>

</body>



</html>