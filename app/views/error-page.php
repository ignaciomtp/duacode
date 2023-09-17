<?php 

include "app/views/layout/base.php";
include "app/views/layout/styles3.php";
include "app/views/layout/sidebar3.php";
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">     
        <div class="d-flex align-items-center justify-content-center ">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Jugador no encontrado.</p>
                <p class="lead">
                    Ningún juador de este equipo es capitán.
                  </p>
                <a href="../../equipos/edit/<?php echo $data['id'] ?>" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </main>


<?php

include "app/views/layout/endfile.php";