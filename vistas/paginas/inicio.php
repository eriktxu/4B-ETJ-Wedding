<?php 

    if (!isset($_SESSION["validarIngreso"])) {
      echo '<script>window.location="index.php?pagina=ingreso";</script>';  
      return;
    } else {
        if ($_SESSION["validarIngreso"] != "ok") {
            echo '<script>window.location="index.php?pagina=inicio";</script>';  
            return;
        }
    }
    ?>
    <?php
    require_once("controladores/formularios.controlador.php");

    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
    //echo '<pre>'; print_r($usuarios); echo '</pre>';

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/1f54bfc51f.js" crossorigin="anonymous"></script>

<section class="breadcumd__banner">
<table class="table table-striped tabla-blanca">
<thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead> 
    <tbody>
        <?php foreach ($usuarios as $key => $value): ?>
            <tr>
                <td><?php echo ($key+1); ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["email"]; ?></td>
                <td><?php echo $value["f"]; ?></td>
                <td>
                    <div class="btn-group">
                        <div class="px-1">
                            <a href="index.php?pagina=editar&token=<?php echo $value["token"]; ?> "class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <form method="post">
                            <input type="hidden" value="<?php echo $value["token"]; ?>"
                            name="eliminarRegistro">
                            <button type="sumbit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button> 
                            <?php 
                                $eliminar = new ControladorFormularios();
                                $eliminar->ctrEliminarRegistro();                            
                            ?> 
                        </form>
                        
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
        </section>


<style>
.tabla-blanca {
    background-color: white;
}
</style>