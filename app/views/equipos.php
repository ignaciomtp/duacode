<?php 

include "app/views/layout/base.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

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
	            	if(isset($datos['equipos'])) {
		                foreach ($datos['equipos'] as $equipo){
		                    echo "<tr><td>".$equipo['id']."</td>";
		                    echo "<td>".$equipo['nombre']."</td>";
		                    echo "<td>".$equipo['ciudad']."</td>";
		                    echo "<td>".$equipo['deporte']."</td>";
		                    echo "<td>".$equipo['fecha_creacion']."</td>";
		                    echo "<td><a href='#' class='btn btn-sm btn-info'> Editar </a></td>";
		                    echo "<td><a href='#' class='btn btn-sm btn-danger'> Borrar </a></td>";
		                }
	            	}
	            ?>    
              </tbody>
            </table>
        </div>

    </main>

<?php
include "app/views/layout/endfile.php";