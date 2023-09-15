<?php 

include "app/views/layout/base2.php";
include "app/views/layout/sidebar.php";
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">              

        <div class="btn-toolbar mb-2 mb-md-0 " style="display: flex; justify-content: space-between;">
          <h1>Añadir Equipo</h1>

        </div>    

          <form method="POST" >

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
                  <input type="text" class="form-control" id="deporte" name="deporte" >
                  
                </div>

                <div class="mb-3">
                  <label for="fundacion" class="form-label">Fundación</label>
                  <input type="text" class="form-control" id="fundacion" name="fundacion" >
                  
                </div>              
              </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

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