<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" Jairo Galeas">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Agenda de Contantos Personal</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <!--link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"-->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 


    <!-- Custom styles for this template -->

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Agenda personal de Luis Manuel xd</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
         
         
        </ul>
        
      </div>
    </nav>

    <div  class="container">

    <h1 class="page-header text-center">Agenda de contacto Personal</h1>
      <div class="row">
          <div class="col-sm-12">
        <a href="#addNew" class="btn btn-primary" data-toggle="modal" style="margin-button: 8px"><span class="fa fa-plus"></span> Nuevo</a>
        <?php
          session_start();
          if(isset($_SESSION['message'])){
            ?>
            <div class="aler alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">
                  &times;
              </button>
              <?php echo $_SESSION['message']; ?>
            </div>
            <?php
            unset($_SESSION['message']);

          }
        ?>
      <table class="table table-bordered table-striped" id="miAgenda" style="margin-top:20px; " >
        <thead>
          <th>ID</th>
          <th>NOMBRE DE CONTACTO</th>
          <th>CELULAR</th>
          <th>CORREO</th>
          <th>DIRECCION</th>
          <th>ACCIONES</th>
        </thead>
        <tbody>
          <?php
            include_once('bd/conexion.php');
            $database = new ConectarBD();
            $db = $database->open();
            try{
               $sql = 'SELECT * FROM personas';
              foreach($db->query($sql) as $fila){
                ?>
                <tr>
                <td><?php echo $fila['idPersonas']; ?></td>
                <td><?php echo $fila['Nombre']; ?></td>
                <td><?php echo $fila['Telefono']; ?></td>
                <td><?php echo $fila['Correo']; ?></td>
                <td><?php echo $fila['Direccion']; ?></td>
                <td><a href="#edit_<?php echo $fila['idPersonas']; ?>" class="btn btn-success btn-sm" data-toggle="modal">Editar</a>
                <a href="#delete_<?php echo $fila['idPersonas']; ?>" class="btn btn-danger btn-sm" data-toggle="modal">Eliminar</a>
                </td>

                <?php include('editareliminarModal.php');?>

                </tr>
                <?php

              }

            }catch(Exeption $e){
                echo 'Hay un problema con la conexion :' .$e->getmessage();
            }
            $database->close();
          ?>
        </tbody>
      </table>
      </div>
      </div>

    </div><!-- /.container -->
    <?php
     include('addModal.php'); 
     ?>
     

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script para cuando estes conectado a internet-->
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <script>
      $(document).ready( function () {
    $('#miAgenda').DataTable();
} );
    </script>
        <script>
          var table=$("#miAgenda").DataTable({
            language:{
              "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
            },
          });
      </script>
  </body>
</html>
