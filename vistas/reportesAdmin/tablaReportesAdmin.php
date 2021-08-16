<?php
    session_start();
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $idUsuario = $_SESSION['usuario']['id'];
    $contador = 1;
    $sql = "SELECT reporte.id_reporte AS idReporte,
                    reporte.id_usuario AS idUsuario,
                    CONCAT(persona.paterno, ' ',
                            persona.materno, ' ',
                            persona.nombre) AS nombrePersona,
                    equipo.id_equipo AS idEquipo,
                    equipo.nombre AS nombreEquipo,
                    reporte.descripcion_problema AS problema,
                    reporte.estatus AS estatus,         
                    reporte.solucion_problema AS solucion,
                    reporte.fecha AS fecha
            FROM t_reportes AS reporte
                    INNER JOIN
                  t_usuarios AS usuario ON reporte.id_usuario = usuario.id_usuario
                    INNER JOIN
                  t_persona AS persona ON usuario.id_persona = persona.id_persona
                    INNER JOIN
                  t_cat_equipo AS equipo ON reporte.id_equipo = equipo.id_equipo
                    ORDER BY reporte.fecha DESC";
    $respuesta = mysqli_query($conexion, $sql);

?>
<table class="table tabla table-sm table-dark table-bordered dt-responsive nowrap"
        style="width:100%" id="tablaReportesAdminDataTable">
  <thead> 
    <th>#</th>
    <th>Persona</th>
    <th>Dispositivos</th>
    <th>Fecha</th>
    <th>Descripcion</th>
    <th>Estatus</th>
    <th>Solucion</th>
    <th>Eliminar</th>
  </thead>
  <tbody>
<?php while($mostrar = mysqli_fetch_array($respuesta)) { ?>
      <tr class="ro">
        <td><?php echo $contador++;?></td>
        <td><?php echo $mostrar['nombrePersona'];?></td>
        <td><?php echo $mostrar['nombreEquipo'];?></td>
        <td><?php echo $mostrar['fecha'];?></td>
        <td><?php echo $mostrar['problema'];?></td>
        <td>
            <?php
                $estatus = $mostrar['estatus'];
                $cadenaEstatus = '<span class="badge badge-success">Abierto</span>';
                  if ($estatus == 0) {
                      $cadenaEstatus = '<span class="badge badge-danger">Cerrado</span>';

                  }
                  echo $cadenaEstatus;
            ?>
        </td>
        <td>
              <button class="badge badge-info" 
              onclick="obtenerDatosSolucion('<?php echo $mostrar['idReporte']; ?>')"
              data-toggle="modal" data-target="#modalAgregarSolucionReporte">
                Solucion
              </button>
        <?php echo $mostrar['solucion'];?></td>
        <td>
          <?php 
            if ($mostrar['solucion'] == "") {
          ?>
                <button class="btn btn-danger btn-sm" 
                onclick="eliminarReporteAdmin(<?php echo $mostrar['idReporte'] ?>)">
                  eliminar
                </button>
          <?php    
            }
          ?>
        </td>
      </tr>
  <?php }?>
  </tbody>
</table>

<script>
  $(document).ready(function(){
    $('#tablaReportesAdminDataTable').DataTable();
  });
</script>