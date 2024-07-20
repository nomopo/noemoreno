<?php

$filtros = "<div class='portfolio d-flex flex-column flex-lg-row justify-content-center align-items-center'>
    <div class='col-12 col-xl-3 text-center'> </div>
    <div class='col-12 col-xl-2 text-center filtros-menu " . ((active_filtro_menu() == 'Todos') ? ' active_link' : '') . "'>Todos
</div>
<div class='col-12 col-lg-2 text-center filtros-menu" . ((active_filtro_menu() == 'Sistemas') ? ' active_link' : '') . "'>
Sistemas</div>
<div class='col-12 col-lg-2 text-center filtros-menu" . ((active_filtro_menu() == 'Programacion') ? ' active_link' : '') . "'>
    Programación</div>
<div class='col-12 col-lg-3 text-center filtros-menu'> </div>
</div>";

function active_filtro_menu()
{
    if (isset($_GET['filtro'])) {
        $filtro = $_GET['filtro'];
        return $filtro;
    } else {
        return 'Todos';
    }
}
