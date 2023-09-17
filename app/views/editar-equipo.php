<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles3.php";
include "app/views/layout/sidebar3.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="container">

          <div class="btn-toolbar mb-2 mb-md-0 " >
            <h1>Editar Equipo</h1>

          </div>    

          <form method="POST" id="teamForm">

            <div class="row">
              <div class="col-6 row">
                <div class="col-9">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['equipo']['nombre'] ?>">
                    
                  </div>                  
                </div>
                <div class="col-3">
                  <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $data['equipo']['id'] ?>">
                    
                  </div>
                </div>


                <div class="mb-3">
                  <label for="ciudad" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $data['equipo']['ciudad'] ?>">
                  
                </div>
              </div>

              <div class="col-6">
                <div class="mb-3">
                  <label for="deporte" class="form-label">Deporte</label>
                  
                  <select class="form-control" id="deporte" name="deporte">
                    <option value="">- Elija uno -</option>
                    <option value="Fútbol" <?php if($data['equipo']['deporte'] === 'Fútbol') echo 'selected' ?> >Fútbol</option>
                    <option value="Baloncesto" <?php if($data['equipo']['deporte'] === 'Baloncesto') echo 'selected' ?> >Baloncesto</option>
                  </select>
                  
                </div>

                <div class="mb-3">
                  <label for="fundacion" class="form-label">Fundación</label>
                  <input type="date" class="form-control" id="fundacion" name="fundacion" value="<?php echo $data['equipo']['fecha_creacion'] ?>">
                  
                </div>              
              </div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-dark ml-2" href="../../equipos">Volver</a>

            <span class="float-right">
              <button type="button" onclick="getCaptain()" class="btn btn-success mr-3">Capitán</button>
            </span>
          </form>

        <div class="table-responsive mt-5">
          <h2>Jugadores</h2>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
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
                        echo "<td>".$jugador['numero']."</td>";
                        echo "<td>".$jugador['fecha_nacimiento']."</td>";
                        echo "<td><a href='../../jugadores/edit/".$jugador['id']."' class='btn btn-sm btn-info'> Editar </a></td>";
                        echo "<td><button type='button' class='btn btn-sm btn-danger' data-id='".$jugador['id']."' data-name='".$jugador['nombre']."' > Borrar </button></td>";
                    }
                }
              ?>    
              </tbody>

            </table>
        </div>

        <div style="visibility: hidden;">
          <input type="text" name="root" id="root" value="<?php echo ROOT ?>">
        </div>

        </div>
    </main>



<?php
include "app/views/layout/modal-jugador.php";
include "app/views/layout/validacion-equipo.php";
include "app/views/layout/endfile.php";