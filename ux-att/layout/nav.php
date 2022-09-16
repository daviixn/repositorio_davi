<nav class="navbar navbar-header navbar-expand navbar-light" id="topo">

    <!-- BTN HAMBURGUER MENU LATERAL -->
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">            
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-none d-md-block d-lg-inline-block">Olá, <?php echo $NomeUsuario ?></div>
                </a>
                <a href="http://cursos.egp.ce.gov.br/course/view.php?id=144" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-none d-md-block d-lg-inline-block ir-moodle"><?php echo "Ir para o Moodle" ?></div>
          
                </a>
            </li>
        </ul>
        
    </div>
 <!--  
    <div class="container">
        <div class="toggle">
            <input id="switch" type="checkbox" name="theme">
            <label for="switch">Toggle</label>
        </div>
    </div>
-->
</nav>
<div class="progress-container">
    <div class="progress-bar" id="myBar">
    </div>
  </div>
  