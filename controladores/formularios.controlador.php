<?php 

require_once("modelos/formularios.modelo.php");

class ControladorFormularios{

    # Registro

    static public function ctrRegistro(){
        if(isset($_POST["registroNombre"])){
    
            if (preg_match("/^[a-zA-Z]+$/", $_POST["registroNombre"]) && 
                preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})+$/', $_POST["registroEmail"]) &&
                preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])) {
                $tabla = "registros";
    
                $token = md5($_POST["registroNombre"] . "+" . $_POST["registroEmail"]);
    

                $datos = array( "token" => $token,
                                "nombre"=>$_POST["registroNombre"],
                                "email"=>$_POST["registroEmail"],
                                "password"=>$_POST["registroPassword"]);
    
                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                return $respuesta;
            } else {
                $respuesta = "error";
                return $respuesta;
            }
        }
    }

    /**
     * Seleccionar registros de la tabla
     */

    static public function ctrSeleccionarRegistros($item, $valor){
        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
        return $respuesta;
    }

    /**
     * Ingreso
     */

    public function ctrIngreso(){
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
       
            if(is_array($respuesta)){

                if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                    
                    $_SESSION["validarIngreso"] = "ok";
                    
                    echo "Ingreso exitoso";
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?pagina=inicio";
                    </script>';
                } else {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    echo '<div class="alert alert-danger">Error al ingresar, el email o contraseña no coinciden</div>';
                }
            } else {
                
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-danger">Error al ingresar, el email o contraseña no coinciden</div>';

            }

        }
    }

    /**
     * Actualizar registro de la tabla
     */

    static public function ctrActualizarRegistro(){
        if (isset($_POST["actualizarNombre"])) {
    
            if ($_POST["actualizarPassword"] != "") {
                if (preg_match('/^[0-9a-zA-Z]+$/', $_POST["actualizarPassword"])) {
                    $password = $_POST["actualizarPassword"];
                }
            } else {
                $password = $_POST["passwordActual"];
            }

            // Actualizar token 
            if ($_POST["nombreActual"] != $_POST["actualizarNombre"] || $_POST["emailActual"] != $_POST["actualizarEmail"]) {
                $nuevoToken = md5($_POST["actualizarNombre"] ."+". $_POST["actualizarEmail"]);
            } else {
                $nuevoToken = null;
            }

            $tabla = "registros";
            $datos = array( "token" => $_POST["tokenUsuario"],
                            "nuevoToken" => $nuevoToken,
                            "nombre" => $_POST["actualizarNombre"],
                            "email" => $_POST["actualizarEmail"],
                            "password" => $password);

            $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);
            return $respuesta;
    
                
        } 
    }     
    

    /**
     * Eliminar registro
     */

    public function ctrEliminarRegistro(){
        if (isset($_POST["eliminarRegistro"])) {

            $usuario = ModeloFormularios::mdlSeleccionarRegistro("registros", "token", $_POST["eliminarRegistro"]);
            $compararToken = md5($usuario["nombre"] ."+". $usuario["email"]);

            if ($compararToken == $_POST["eliminarRegistro"]) {

                $tabla = "registros";
                $valor = $_POST["eliminarRegistro"];

                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

                if ($respuesta == "ok") {
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }
                        window.location = "index.php?pagina=inicio";
                    </script>';
                }
                } else {
                    # code...
                }

            }
    }
}
