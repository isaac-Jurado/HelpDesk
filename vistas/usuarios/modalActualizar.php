
<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
  <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="idUsuario" id="idUsuario" hidden>
          <div class="row">
            <div class="col-sm 4">
                <label for="paternou">Apellido Paterno</label>
                  <input type="text" class="form-control" name="paternou" id="paternou" required>
            </div>
            <div class="col-sm 4">
                <label for="maternou">Apellido Materno</label>
                  <input type="text" class="form-control" name="maternou" id="maternou" required>
            </div>
            <div class="col-sm 4">
                <label for="nombreu">Nombre</label>
                  <input type="text" class="form-control" name="nombreu" id="nombreu" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm 4">
                <label for="fechaNacimientou">Fecha de nacimiento</label>
                  <input type="date" class="form-control" name="fechaNacimientou" id="fechaNacimientou">
            </div>
            <div class="col-sm 4">
                <label for="sexou">Sexo</label>
                  <select  class="form-control" name="sexou" id="sexou" required>
                      <option value=""></option>
                      <option value="F">Fenemino</option>
                      <option value="M">Masculino</option>
                  </select>
            </div>
            <div class="col-sm 4">
                <label for="telefonou">Telefono</label>
                  <input type="text" class="form-control" name="telefonou" id="telefonou">
            </div>
          </div>
          <div class="row">
            <div class="col-sm 4">
                <label for="correou">Correo</label>
                  <input type="email" class="form-control" name="correou" id="correou">
            </div>
            <div class="col-sm 4">
                <label for="usuariou">Usuario</label>
                  <input type="text" class="form-control" name="usuariou" id="usuariou">
            </div>
            <div class="col-sm 4">  
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
                <label for="idRolu">Rol de Usuario</label>
                  <select name="idRolu" id="idRolu" class="form-control" >
                      <option value="1">Cliente</option>
                      <option value="2">Administrador</option>
                  </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
                <label for="ubicacionu">Ubicacion </label>
                  <textarea name="ubicacionu" id="ubicacionu" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
</form>