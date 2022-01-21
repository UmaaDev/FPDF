<?php
    class Cconexion{
        public static function ConexionBD(){
            $host = 'localhost';
            $dbname = 'BDConservacion';
            $username = 'umaacnx';
            $password = 'umaacnx';
            $puerto = 1433;
            
            try {
                $conn = new PDO("sqlsrv:server=$host,$puerto;Database=$dbname",$username,$password);
                echo ("Se conecto a la base de datos correctamente");
            } catch (PDOExeption $exp) {    
                echo ("No se logro conectar correctamente con la base de datos: $dbname, error: $exp");
            }
            return $conn;
            $Query = $dsn->prepare("select * from Tabla_bitacora$ where `ID` = :id");
            $Query->bindParam(':id', 1, PDO::PARAM_INT);
            $Query->execute();

$rs = $q->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>+
3