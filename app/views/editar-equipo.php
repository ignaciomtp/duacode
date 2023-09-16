<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles3.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="container">

          <div class="btn-toolbar mb-2 mb-md-0 " >
            <h1>Editar Equipo</h1>

          </div>    

          <form method="POST" >

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
                    <option>- Elija uno -</option>
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
          </form>
        </div>
    </main>



<?php
include "app/views/layout/endfile.php";