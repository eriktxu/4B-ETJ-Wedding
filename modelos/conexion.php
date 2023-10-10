<?php 

class Conexion {

    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3308;dbname=wedding-etj", "soporte", "122123");
        //database conexion
        $link->exec("set names utf8");
        
        return $link;
    }
}
