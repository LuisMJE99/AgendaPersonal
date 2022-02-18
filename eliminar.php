<?php
session_start();
include_once('bd/conexion.php');
if(isset($_GET['id'])){
    $database = new ConectarBD();
    $db = $database->open();
    try{
       
        $sql = "DELETE FROM personas WHERE idPersonas = '".$_GET['id']."'";

        
		$_SESSION['message']=($db->exec($sql)) ? 'Datos Eliminado correctamente' :
         'Algo Salio mal, No se pudo agregar el contacto';
    }catch(PDOException $e) {
        $_SESSION['message']=$e->getMessage();
    }
    $database->close();
}else{
        $_SESSION['message']= 'Selecciona un contacto';
    }
    header('location: index.php');
?>