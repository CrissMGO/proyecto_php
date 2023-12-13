<nav class="navbar fixed-top" style="background-color: #2E86C1;">
    <div class="container-fluid">
   
        <button class="navbar-toggler" style="background-color: white; padding: 4px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size: 16px;"></span>
        </button>
        <h3 class="h3 a">TOOLS STORE</h3>
        <a href="../../view/admin_artic/welcome.php" style="margin-left:30px; background-color:white; color:black!important;" class="btn btn-secondary " role="button" aria-disabled="true">Home</a>
       

        <div class="offcanvas offcanvas-start " style="background-color: #2E86C1;  width: 300px; " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <img class="imagen" src="../../assets/img/icono.png" style="width:45px; height:45px;" alt="">
                <h4 class="ml-2" style="color: white; margin-left:-50px;">tools store</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>


            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item num2">
                        <a href="../../view/admin_artic/registro.php" id="enlaceRegistro" class="a list-group-item list-group-item-action text-light load-content" style="background-color:#2E86C1">
                            <i class="fa fa-plus" aria-hidden="true"></i> Registrar articulo
                        </a>
                    </li>
                    <br>
                    <li class="nav-item num2">
                        <a href="../../view/admin_artic/listar.php" id="enlaceLista" class="list-group-item list-group-item-action text-light load-content" style="background-color: #2E86C1;">
                            <i class="fa fa-list-alt" aria-hidden="true"></i> Lista de articulos
                        </a>
                    </li>
                    <br>
                    <li class="nav-item num2 dropdown">
                        <a href="#" class="list-group-item list-group-item-action text-light" style="background-color: #2E86C1;">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now!
                        </a>
                    </li>
                    <br>
                    <li class="nav-item num2 dropdown">
                        <a href="../login/salir.php" aria-expanded="false" class="conten list-group-item list-group-item-action text-light" style="background-color: #2E86C1;">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>