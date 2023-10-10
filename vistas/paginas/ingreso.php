
<?php
require_once './controladores/formularios.controlador.php';
?>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/1f54bfc51f.js" crossorigin="anonymous"></script>
</head>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
        <div class="container-fluid">
    <div class="container py-5">
    <div class="d-flex justify-content-center text-center ">
        
    <form class="p-5 bg-light" method="post" style="color: black;">

                <div class="form-group">
                    <label for="email" class="text-dark">Email address:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="ingresoEmail">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pwd" class="text-dark">Contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="ingresoPassword">
                    </div>
                </div>

                <?php 
                
                    $ingreso = new ControladorFormularios();
                    $ingreso -> ctrIngreso();

                ?>
                
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>

<style>
    .breadcumd__banner {
    height: 100vh;
    margin: 0;
    padding: 0;
    }
</style>