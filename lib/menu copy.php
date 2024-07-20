<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
    <a href="../index.php"><img src="../assets/img/logo.png" class="navbar-brand logo-menu" alt="Noé Moreno"
            width="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link <?php echo (active() == 'index') ? ' active_link' : ''; ?>"
                    href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo (active() == 'servicios') ? 'active_link' : ''; ?>"
                    href="../servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo (active() == 'portfolio') ? 'active_link' : ''; ?>"
                    href="../portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo (active() == 'contactar') ? 'active_link' : ''; ?>"
                    href="../contactar.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo (active() == 'noticias') ? 'active_link' : ''; ?>"
                    href="../noticias.php">Noticias</a>
            </li>
        </ul>
    </div>
</nav>
<?php
function active()
{
    if (isset($_SERVER['REQUEST_URI'])) {
        $url = $_SERVER['REQUEST_URI'];
        $contador = explode("/", $_SERVER['REQUEST_URI']);

        if (count($contador) > 2) {
            $url = preg_replace("/\.php/", "", $contador[2]);
            return $url;
        } else {
            $url = preg_replace("/\.php/", "", $contador[1]);
            return $url;
        };
    }
}

?>