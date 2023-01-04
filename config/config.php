<?php

    session_start();

    class Conectar {

        protected $dbh;

            protected function Conexion_App(){
                try{
                    $serverName='1PJMORIANO\SQLEXPRESS';
                    $connectionInfo= array("Database"=>"TAREOSUPERVISOR","UID"=>"Server","PWD"=>"devVLV2022","CharacterSet"=>"UTF-8");
                    $conex = sqlsrv_connect($serverName, $connectionInfo);
                }   catch(Exception $e) {
                    print "¡Error! App Empresa: " . $e->getMessage() . "<br/>";
				    die();	
                }
            }

            public function set_names(){
                return $this->dbh->query("SET NAMES 'utf8'");
            }

            public function ruta(){
                return "http://localhost:90/APPSEMPRESA/";
            }

    }

    

    ?>