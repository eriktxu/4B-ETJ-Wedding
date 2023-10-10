<?php

require_once './controladores/formularios.controlador.php';

if (isset($_GET["token"])) {
    $item = "token";
    $valor = $_GET["token"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    //echo '<pre>'; print_r($usuario); '</pre>';
}

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

    <div class="d-flex justify-content-center text-center">

        <form class="p-5 bg-light" method="post">
            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" value=" <?php echo $usuario["nombre"]?>" placeholder="Enter name" id="nombre" name="actualizarNombre">
                </div>
            </div>

            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" value=" <?php echo $usuario["email"]?>" placeholder="Enter email" id="email" name="actualizarEmail" >
                </div>
            </div>

            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control"  placeholder="Enter password" id="pwd" name="actualizarPassword">

                    <input type="hidden" name="passwordActual" value=" 
                    <?php
                    echo $usuario["password"]
                    ?>">

                    <input type="hidden" name="tokenUsuario" value=" 
                    <?php
                    echo $usuario["token"]
                    ?>">

                    <input type="hidden" name="nombreActual" value=" 
                    <?php
                    echo $usuario["nombre"]
                    ?>">

                    <input type="hidden" name="emailActual" value=" 
                    <?php
                    echo $usuario["email"]
                    ?>">
                </div>
            </div>

            <?php
                $actualizar = ControladorFormularios::ctrActualizarRegistro();
                if ($actualizar == "ok") {
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';
                    echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
                    <script>
                        setTimeout(function(){
                            window.location = "index.php?pagina=inicio";
                        }, 1600);
                    </script>';
                }
                if ($actualizar == "error") {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href)
                    }
                    </script>';
                    echo '<div class="alert alert-danger">Error al actualizar usuario</div>';
                }

            ?>

            <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>
    </div>

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