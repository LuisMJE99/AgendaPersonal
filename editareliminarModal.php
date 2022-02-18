<div class="modal fade" id="edit_<?php echo $fila['idPersonas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <center> <h4 class="modal-title">Editar Contacto</h4></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      
      <body>
          <div class="modal-body">
              <div class="container-fluid">
                <form method="POST" action="editar.php?id=<?php echo $fila['idPersonas']; ?>">

                  <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-label">NOMBRE: </label>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="nombrecontacto" value ="<?php echo $fila['Nombre']; ?>">
                        </div>
<!---------------------------------------------------------------------------------------------------------------->
                    <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">CELULAR</label>
                    </div>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="celular" value ="<?php echo $fila['Telefono']; ?>">
                        </div>
<!-------------------------------------------------------------------------------------------------------------->
                        <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">CORREO</label>
                    </div>
                    </div>
         
                    <div class="col-sm-10">
                            <input type="text" class="from-control" name="correo" value ="<?php echo $fila['Correo']; ?>">
                        </div>

<!----------------------------------------------------------------------------------------------------------------------->
                        <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">Dirreccion</label>
                    </div>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="direccion" value ="<?php echo $fila['Direccion']; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> cancelar</button>
                            <button type="submit" name="edit" class="btn btn-success" ><span class="fa fa-save"></span> Actualizar</button>
                        </div>

                    </div>
                </form>
            </div>
          </div>
          </div>
      </body>
    </div>

 
</div>
   <!--ELIMINAR---->
   <div class="modal fade" id="delete_<?php echo $fila['idPersonas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <center> <h4 class="modal-title">Eliminar Contacto</h4></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      
     
          <div class="modal-body">
              <p class="text-center"> ¿Seguro de eliminar los datos ?</p>
              <h2 class="text-center">  <?php echo $fila['Nombre']; ?> </h2>
            
          </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> cancelar</button>
                            <a href="eliminar.php?id=<?php echo $fila['idPersonas'] ?>" class="btn btn-danger"> Si</a>
                            
                        </div>
     </div>
      
     </div>

 
</div>
