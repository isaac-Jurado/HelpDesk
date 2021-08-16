<?php
include "header.php";
    if (isset($_SESSION['usuario']) &&
        $_SESSION['usuario']['rol'] == 2) {
?>

<!-- Page Content -->
<div class="container">
  <div class="card carD border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="fw-light">Administrar usuarios</h1>
      <p class="lead"> 
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios">
          Agregar usuario
        </button>
        <hr>
        <div id="tablaUsuariosLoad"></div>
      </p>
  </div>
</div>


<?php 
    include "usuarios/modalAgregar.php";
    include "usuarios/modalActualizar.php";
    include "footer.php"; 
?>
  <script src="../public/js/usuarios/usuarios.js"></script>
<?php
    }else{
      header("location:../index.html");
    }
?>   
