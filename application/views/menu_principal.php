<?php
    $vistas = array(
        'info_bar' => '<p>Usuario</p><a href="?">Cerrar Sesión</a>',
        'pop_up' => 'Contiene los mensajes del sistema',
        'herra_bar' => 'Contiene la barra de herramientas',
    );
?>
<!DOCTYPE html>
<html>
    <head>
        <?=$head; ?>
    </head>
    <body>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1><?=$seccion; ?></h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <?=$contenido; ?>
            </section>
            <footer class="pie_principal">
                <?=$vistas['herra_bar']; ?>
            </footer><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </body>
</html>