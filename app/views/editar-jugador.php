<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles3.php";
include "app/views/layout/sidebar3.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="container">

          <div class="btn-toolbar mb-2 mb-md-0 " >
            <h1>Editar Jugador</h1>

          </div>    

          <form method="POST" id="playerForm">

            <div class="row">
              <div class="col-6 row">
                <div class="col-9">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['jugador']['nombre'] ?>">
                    
                  </div>                  
                </div>
                <div class="col-3">
                  <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" readonly value="<?php echo $data['jugador']['id'] ?>">
                    
                  </div>                  
                </div>



                <div class="mb-3">
                  <label for="apellidos" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $data['jugador']['apellidos'] ?>">
                  
                </div>
              </div>

              <div class="col-6 row">
                <div class="col-4">
                  <div class="mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $data['jugador']['numero'] ?>">
                  </div>
                </div>
                <div class="col-8">
                  <div class="mb-3">
                    <label for="equipo" class="form-label">Equipo</label>
                    
                    <select class="form-control" id="equipo" name="equipo">
                      <option value="">- Elija uno -</option>
                      <?php 
                        foreach($data['equipos'] as $equipo) {
                          if($equipo['id'] === $data['jugador']['id_equipo']) {
                            echo '<option value="'.$equipo['id'].'" selected >'.$equipo['nombre'].'</option>';
                          } else {
                            echo '<option value="'.$equipo['id'].'">'.$equipo['nombre'].'</option>';
                          }
                          
                        }
                      ?>
                    </select>
                    
                  </div>                  
                </div>



                <div class="mb-3">
                  <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                  <input type="date" class="form-control" id="nacimiento" name="nacimiento" value="<?php echo $data['jugador']['fecha_nacimiento'] ?>">
                  
                </div>              
              </div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-dark ml-2" href="../../jugadores">Volver</a>
          </form>
        </div>
    </main>


<?php

include "app/views/layout/validacion-jugador.php";
include "app/views/layout/endfile.php";