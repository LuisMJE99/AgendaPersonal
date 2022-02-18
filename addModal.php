<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <center> <h4 class="modal-title">Agregar Contacto</h4></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      
      <body>
          <div class="modal-body">
              <div class="container-fluid">
                <form method="POST" action="agregar.php" id="miFormularioAdd">

                  <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-label">NOMBRE: </label>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="nombrecontacto">
                        </div>
<!---------------------------------------------------------------------------------------------------------------->
                    <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">CELULAR</label>
                    </div>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="celular">
                        </div>
<!-------------------------------------------------------------------------------------------------------------->
                        <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">CORREO</label>
                    </div>
                    </div>
         
                    <div class="col-sm-10">
                            <input type="text" class="from-control" name="correo">
                        </div>

<!----------------------------------------------------------------------------------------------------------------------->
                        <div class="row from-group">
                    <div class="col-sm-2">
                        <label class="control-labeel">Dirreccion</label>
                    </div>
                    </div>
                        <div class="col-sm-10">
                            <input type="text" class="from-control" name="direccion">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="BorrarDatosForm()"><span class="fa fa-close"></span> cancelar</button>
                            <button type="submit" name="add" class="btn btn-primary" ><span class="fa fa-save"></span> Guardar</button>
                        </div>

                    </div>
                </form>
            </div>
          </div>
          </div>
      </body>
    </div>

 
</div>
<script>
    function BorrarDatosForm(){
        document.getElementById("miFormularioAdd").reset();
    }
</script>