<?php

require_once("../config/config.php");

class App extends Conectar {

    public function get_user($user, $contrasenia){
        $conectar_LOGIN = parent::Conexion_app();
        parent::set_names();
        $sql="SPU_LOGIN ?,?";
        $stmt=$conectar_LOGIN->prepare($sql);
        $stmt->bindValue(1,$user);
        $stmt->bindValue(2,$contrasenia);
            $stmt->execute();

            return $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>