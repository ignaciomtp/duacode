<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles2.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="container">

          <div class="btn-toolbar mb-2 mb-md-0 " >
            <h1>Añadir Equipo</h1>

          </div>    

          <form method="POST" id="teamForm">

            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" >
                  
                </div>

                <div class="mb-3">
                  <label for="ciudad" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="ciudad" name="ciudad" >
                  
                </div>
              </div>

              <div class="col-6">
                <div class="mb-3">
                  <label for="deporte" class="form-label">Deporte</label>
                  
                  <select class="form-control" id="deporte" name="deporte">
                    <option value="">- Elija uno -</option>
                    <option value="Fútbol">Fútbol</option>
                    <option value="Baloncesto">Baloncesto</option>
                  </select>
                  
                </div>

                <div class="mb-3">
                  <label for="fundacion" class="form-label">Fundación</label>
                  <input type="date" class="form-control" id="fundacion" name="fundacion" >
                  
                </div>              
              </div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
    </main>


<?php

include "app/views/layout/validation.php";
include "app/views/layout/endfile.php";