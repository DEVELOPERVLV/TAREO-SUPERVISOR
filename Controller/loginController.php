<?php

require_once("../config/config.php");

require_once("../Model/login.php");

$app = new App();

switch($_GET["op"]){

    case 'login':

        $datos =>$app->get_user($_POST['user'], $_POST['user']);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $_SESSION['user'] == $row['dni'];

                }
                echo json_encode($_SESSION['user']);
            }


}

class LoginController{

    var $user;

    function __construct(){

    }

}

?>