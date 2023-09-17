    <body>

        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ola</a>
          <ul class="navbar-nav px-3">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Pepito <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="logout.php"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="logout.php" method="POST" style="display: none;">
                       
                    </form>
                </div>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="row" >

    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../equipos">
              <span data-feather="equipos"></span>
              Equipos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../jugadores">
              <span data-feather="jugadores"></span>
              Jugadores
            </a>
          </li>

        </ul>


      </div>
    </nav>
