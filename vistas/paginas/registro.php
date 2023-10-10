<?php
require_once './controladores/formularios.controlador.php';
?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
        <div class="container-fluid">
    <div class="container py-5">
    <div class="d-flex justify-content-center text-center; ">
    <form class="p-5 bg-light" method="post" style="color: black;">
                <div class="form-group">
                    <label for="Nombre" class="text-dark">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Escriba su nombre" id="nombre" name="registroNombre">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="text-dark">Email address:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="registroEmail">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pwd" class="text-dark">Contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="registroPassword">
                    </div>
                </div>
                <?php 
                    $registro = ControladorFormularios::ctrRegistro();

                    if($registro == "ok"){
                        echo '<script>
                                if(window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                        echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                    }
                    if($registro == "error"){
                        echo '<script>
                                if(window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';
                        echo '<div class="alert alert-danger">Error! No se permiten carácteres especiales</div>';
                    }
                ?>
                <button type="submit" class="btn btn-primary">Sign up</button>
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

