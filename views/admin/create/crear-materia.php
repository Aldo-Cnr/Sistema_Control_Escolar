<!-- Modal Creacion-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Agregar Materia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  d-flex justify-content-center">

        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
          <div class="mb-2 w-100 position-relative">
            <input type="text" class="rounded-2 text-center" name="materia" placeholder="Nombre de la materia" autocomplete="off">
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="docente" class="text-dark">Creditos:</label>
            <select class="rounded-2 w-100 text-center" name="creditos" id="creditos">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="docente" class="text-dark">Docente:</label>
            <select class="rounded-2 w-100 text-center" name="docente" id="docente">
              <?php foreach($docentes as $docente){?> 
              <option value="<?php echo $docente['id_docente'] ?>"><?php echo $docente['nombres']. " ". $docente['apellidos']?></option>
              <?Php }?>
            </select>
          </div>
          
          <input type="submit" class="btn btn-primary" name="register" value="Guardar"/>
        </form>
          
      </div>
    </div>
  </div>
</div>

<?php
 include('../../controllers/materias/crear-materia-controller.php');
?>



<!-- JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>