<?php
//llamamos al archivo header para la parte superior (encabezado)
require "../Plantillas/header.php";
?>

<!-- Formulario de subida -->
<section class="" style="background-color:#F0F1C5;">
  <div class="container p-3 mb-5 ">

    <h2 class="fw-bold text-center pt-3">Subir archivos</h2>

    <form action="../Controlador/upload.php" method="post" enctype="multipart/form-data" class="text-center">
      <div class="mb-3">
        <!-- <label for="archivo" class="form-label ">Seleccionar archivo</label> -->
        <input type="file" class="form-control w-75" id="archivo" name="archivo" required>
      </div>
      <div class="mb-3">
        <label for="archivo" class="form-label d-flex align-items-lg-start fw-semibold">agregar informacion basica</label>
        <input type="text" class="form-control w-75" id="detalle" name="detalle" required>
      </div>

      <button type="submit" class="btn" style="background-color: #BF9264;">Subir archivo</button>
    </form>
  </div>
  <hr>
</section>


<!-- Lista de archivos (simulada) -->
<section class="p-2">

  <h2 class="text-center fw-bold">Lista de archivos</h2>
  <div class="row row-cols-1 row-cols-md-2 g-4 mb-5 container-fluid">

    <?php
    require "../Modelo/consult.php";

    foreach ($consult_archivos as $infoarchivos) { ?>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title"><?php echo $infoarchivos->nombreOriginal ?></h5>
            <p class="card-text"><?php echo  $infoarchivos->detalle ?></p>
          </div>
          <div class="card-footer text-end">
            <a href="<?php echo $infoarchivos->ruta?>" download class="btn btn-success btn-sm">Descargar</a>
          </div>
        </div>
      </div>


    <?php } ?>

    <div class="col">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">ejem. planos.pdf</h5>
          <p class="card-text">Documento con planos estructurales en formato PDF.</p>
        </div>
        <div class="card-footer text-end">
          <a href="archivos/planos.pdf" download class="btn btn-danger btn-sm">Eliminar</a>
          <a href="archivos/planos.pdf" download class="btn btn-success btn-sm">Descargar</a>
        </div>
      </div>
    </div>

    <!-- Puedes duplicar este bloque para más archivos -->
  </div>

</section>
<!-- llamamos al footer para la parte inferior -->
<?php
require "../Plantillas/footer.php";
?>