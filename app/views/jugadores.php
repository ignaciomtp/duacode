<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="btn-toolbar mb-2 mb-md-0 " style="display: flex; justify-content: space-between;">
          <h1>Jugadores</h1>

          <div class="btn-group mr-2 text-right p-3" >
            <a href="jugadores/add" class="btn btn-primary" >Añadir</a>
          </div>
        </div>        

        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Equipo</th>
                  <th>Número</th>
                  <th>Nacimiento</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
	            <?php
	            	if(isset($data['jugadores'])) {
		                foreach ($data['jugadores'] as $jugador){
		                    echo "<tr><td>".$jugador['id']."</td>";
		                    echo "<td>".$jugador['nombre']."</td>";
		                    echo "<td>".$jugador['apellidos']."</td>";
                        echo "<td>".$jugador['equipo']."</td>";
		                    echo "<td>".$jugador['numero']."</td>";
		                    echo "<td>".$jugador['fecha_nacimiento']."</td>";
		                    echo "<td><a href='jugadores/edit/".$jugador['id']."' class='btn btn-sm btn-info'> Editar </a></td>";
		                    echo "<td><button type='button' class='btn btn-sm btn-danger' data-id='".$jugador['id']."' data-name='".$jugador['nombre']." ".$jugador['apellidos']."' > Borrar </button></td>";
		                }
	            	}
	            ?>    
              </tbody>
            </table>
        </div>

    </main>

<!-- Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <form method="post" action="jugadores/deleteplayer">

        <div class="modal-header">
          <h5 class="modal-title">¿Seguro que quieres borrar este jugador?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h2 id="playerName"></h2>
          <input type="text" name="playerId" id="playerId" readonly style="visibility: hidden;" />
        </div>
        <div class="modal-footer">
          <button type="submit" id="buttonDelete" class="btn btn-primary">Borrar</button>
          <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

  $(document).ready(function() {
      
    $('.btn-danger').on("click", borrar);
  });
  
  function borrar(){

    let id = this.dataset.id;
    let name = this.dataset.name;

    $('#playerName').html(name);
    $('#playerId').val(id);

    $('#confirmDelete').modal('show');
  }

  function closeModal() {
    $('#confirmDelete').modal('hide');
  }

</script>

<?php
include "app/views/layout/endfile.php";