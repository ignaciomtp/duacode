<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles2.php";
include "app/views/layout/sidebar2.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="container">

          <div class="btn-toolbar mb-2 mb-md-0 " >
            <h1>Añadir Jugador</h1>

          </div>    

          <form method="POST" id="playerForm">

            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" >
                  
                </div>

                <div class="mb-3">
                  <label for="apellidos" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos" >
                  
                </div>
              </div>

              <div class="col-6 row">
                <div class="col-4">
                  <div class="mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="number" class="form-control" id="numero" name="numero">
                  </div>
                </div>
                <div class="col-8">
                  <div class="mb-3">
                    <label for="equipo" class="form-label">Equipo</label>
                    
                    <select class="form-control" id="equipo" name="equipo">
                      <option value="">- Elija uno -</option>
                      <?php 
                        foreach($data['equipos'] as $equipo) {
                          echo '<option value="'.$equipo['id'].'">'.$equipo['nombre'].'</option>';
                        }
                      ?>
                    </select>
                    
                  </div>                  
                </div>

                <div class="col-4">
                    <div class="form-check mt-3 pt-3">
                      <input class="form-check-input" type="checkbox" value="" id="capitan" name="capitan" >
                      <label class="form-check-label" for="capitan">
                        Capitán
                      </label>
                    </div>
                </div>
                <div class="col-8">
                  <div class="mb-3">
                    <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento" >
                    
                  </div>                 
                </div>

            
              </div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
    </main>


<?php

include "app/views/layout/validacion-jugador.php";
include "app/views/layout/endfile.php";