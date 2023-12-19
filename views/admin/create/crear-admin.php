<!-- Modal Creacion-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Agregar Administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  d-flex justify-content-center">

        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
            <div class="mb-2 w-100 position-relative">
              <input type="number" class="rounded-2 text-center" name="id_admin" placeholder="Matricula" autocomplete="off">
            </div>
            <div class="mb-2 w-100 position-relative">
              <input type="text" class="rounded-2 text-center" name="nombres" placeholder="Nombre(s)" autocomplete="off">
            </div>
            <div class="mb-2 w-100 position-relative">
                <input type="text" class="rounded-2 text-center" name="apellidos" placeholder="Apellidos" autocomplete="off">
            </div>
            <div class="mb-2 w-100 position-relative">
              <input type="number" class="rounded-2 text-center" name="edad" placeholder="Edad" autocomplete="off">
            </div>


            <input type="submit" class="btn btn-primary" name="register" value="Guardar"/>
        </form>
          
      </div>
    </div>
  </div>
</div>

<?php
 include('../../controllers/admin/crear-admin-controller.php');
?>



<!-- JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>