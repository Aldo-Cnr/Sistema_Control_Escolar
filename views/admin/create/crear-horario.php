<!-- Modal Creacion-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Agregar Horario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  d-flex justify-content-center">

        <form method="POST" class="d-flex align-items-center justify-content-center flex-md-column">
          <div class="mb-2 w-100 position-relative">
            <label for="dia" class="text-dark">Día:</label>
            <select class="rounded-2 w-100 text-center" name="dia" id="dia">
              <option value="Lunes">Lunes</option>
              <option value="Martes">Martes</option>
              <option value="Miercoles">Miercoles</option>
              <option value="Jueves">Jueves</option>
              <option value="Viernes">Viernes</option>
            </select>
          </div>
          <div class="mb-2 w-100 position-relative d-flex flex-column">
            <label for="hora-inicio" class="text-dark">Hora de Inicio:</label>
            <input type="time" id="hora-inicio" name="hora-inicio" min="08:00" max="14:00">
          </div>
          <div class="mb-2 w-100 position-relative d-flex flex-column">
            <label for="hora-final" class="text-dark">Hora Final:</label>
            <input type="time" id="hora-final" name="hora-final" min="08:00" max="14:00">
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="aula" class="text-dark">Aula:</label>
            <select class="rounded-2 w-100 text-center" name="aula" id="aula">
              <?php foreach($aulas as $aula){?> 
              <option value="<?php echo $aula['id_aula'] ?>"><?php echo $aula['nombre']. ' - '. $aula['tipo'];?></option>
              <?Php }?>
            </select>
          </div>
          <div class="mb-2 w-100 position-relative">
            <label for="materia" class="text-dark">Materia:</label>
            <select class="rounded-2 w-100 text-center" name="materia" id="materia">
              <?php foreach($materias as $materia){?> 
              <option value="<?php echo $materia['id_materia'] ?>"><?php echo $materia['materia'];?></option>
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
 include('../../controllers/horarios/crear-horario-controller.php');
?>



<!-- JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>