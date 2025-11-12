<?php 
    require_once "Classes/Dbh.php";

    $db = new Dbh();
    $conn = $db->connect();

    if($conn){
        echo "Conexion succesfull";
    }
?>
