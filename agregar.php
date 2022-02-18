<?php
session_start();
include_once('bd/conexion.php');
if(isset($_POST['add'])){
    $database = new ConectarBD();
    $db = $database->open();
    try{
        $stmt = $db->prepare("INSERT INTO personas (Nombre, Telefono, Correo, Direccion) VALUES (:nombrecontacto, :celular, :correo, :direccion)");
		$_SESSION['message']=($stmt->execute(array(':nombrecontacto'=>$_POST['nombrecontacto'],
        ':celular'=>$_POST['celular'],':correo'=>$_POST['correo'],
        ':direccion'=>$_POST['direccion']))) ? 'Contacto agregado correctamente' :
         'Algo Salio mal, No se pudo agregar el contacto';
    }catch(PDOException $e) {
        $_SESSION['message']=$e->getMessage();
    }
    $database->close();
}else{
        $_SESSION['message']= 'rellena el formulario';
    }
    header('location: index.php');
?>