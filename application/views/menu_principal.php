<?php
    $vistas = array(
        'head' => '<meta charset="utf-8" /><title>Sección Actual</title>',
        'seccion' => '<h1>Sección Actual</h1>',
        'contenido' => '<b>CONTENIDO</b>',
        'info_bar' => '<p>Usuario</p><a href="?">Cerrar Sesión</a>',
        'pop_up' => 'Contiene los mensajes del sistema',
        'herra_bar' => 'Contiene la barra de herramientas'
    );
?>
<!DOCTYPE html>
<html>
    <head>
        <?=$vistas['head']; ?>
    </head>
    <body>
        <section class="marco_general">
            <header class="seccion_actual">
                <?=$vistas['seccion']; ?>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <?=$vistas['contenido']; ?>
                <?=$vistas['info_bar']; ?>
                <?=$vistas['pop_up']; ?>
            </section>
            <footer class="pie_principal">
                <?=$vistas['herra_bar']; ?>
            </footer><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </body>
</html>