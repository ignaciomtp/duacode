<?php 

include "app/views/layout/base.php";
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
		                    echo "<td><a href='#' class='btn btn-sm btn-info'> Editar </a></td>";
		                    echo "<td><button type='button' class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'> Borrar </button></td>";
		                }
	            	}
	            ?>    
              </tbody>
            </table>
        </div>

    </main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
include "app/views/layout/endfile.php";