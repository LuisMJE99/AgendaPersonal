<?php
session_start();
include_once('bd/conexion.php');
if(isset($_POST['edit'])){
    $database = new ConectarBD();
    $db = $database->open();
    try{
        $id = $_GET['id'];
        $nombrec= $_POST['nombrecontacto'];
        $telefonoc = $_POST['celular'];
        $correoc = $_POST['correo'];
        $direccionc = $_POST['direccion'];
        $sql = "UPDATE personas SET Nombre = '$nombrec', Telefono = '$telefonoc', Correo = '$correoc',Direccion = '$direccionc' WHERE idPersonas = '$id'";

        
		$_SESSION['message']=($db->exec($sql)) ? 'Datos Actualizado correctamente' :
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