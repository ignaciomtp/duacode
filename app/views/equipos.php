<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="btn-toolbar mb-2 mb-md-0 " style="display: flex; justify-content: space-between;">
          <h1>Equipos</h1>

          <div class="btn-group mr-2 text-right p-3" >
            <a href="equipos/add" class="btn btn-primary" >Añadir</a>
          </div>
        </div>        

        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Equipo</th>
                  <th>Ciudad</th>
                  <th>Deporte</th>
                  <th>Fundación</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
	            <?php
	            	if(isset($data['equipos'])) {
		                foreach ($data['equipos'] as $equipo){
		                    echo "<tr><td>".$equipo['id']."</td>";
		                    echo "<td>".$equipo['nombre']."</td>";
		                    echo "<td>".$equipo['ciudad']."</td>";
		                    echo "<td>".$equipo['deporte']."</td>";
		                    echo "<td>".$equipo['fecha_creacion']."</td>";
		                    echo "<td><a href='equipos/edit/".$equipo['id']."' class='btn btn-sm btn-info'> Editar </a></td>";
		                    echo "<td><button type='button' class='btn btn-sm btn-danger' data-id='".$equipo['id']."' data-name='".$equipo['nombre']."' > Borrar </button></td>";
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
      <form method="post" action="equipos/deleteteam">

        <div class="modal-header">
          <h5 class="modal-title">¿Seguro que quieres borrar este equipo?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h2 id="teamName"></h2>
          <input type="text" name="teamId" id="teamId" readonly style="visibility: hidden;" />
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

    $('#teamName').html(name);
    $('#teamId').val(id);

    $('#confirmDelete').modal('show');
  }

  function closeModal() {
    $('#confirmDelete').modal('hide');
  }

</script>

<?php
include "app/views/layout/endfile.php";