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
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1>Datos Cliente</h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal listar_clientes">
                <p>
                    <label><b>Número de cliente:</b></label>
                    <br />
                    <?=$datos_cliente['id_cliente']; ?>
                </p>
                <p>
                    <label><b>Nombre:</b></label>
                    <br />
                    <?=$datos_cliente['nombre'].' '.$datos_cliente['apellido_p'].' '.$datos_cliente['apellido_m']; ?>
                </p>
                <p>
                    <label><b>RFC:</b></label>
                    <br />
                    <?=$datos_cliente['rfc']; ?>
                </p>
                <p>
                    <label><b>Dirección:</b></label>
                    <br />
                    <?='Calle '.$datos_cliente['calle_numero'].',<br />Colonia '.$datos_cliente['colonia'].',<br />Delegación '.$datos_cliente['delegacion_municipio'].',<br />C.P. '.$datos_cliente['codigo_postal']; ?>
                </p>
                <p>
                    <label><b>Contacto:</b></label>
                    <br />
                    <?='Télefono Fijo: '.$datos_cliente['telefono_p'].'<br />Télefono Móvil: '.$datos_cliente['telefono_m'].'<br />Correo Electrónico: '.$datos_cliente['correo_e']; ?>
                </p>
            </section>
            <footer class="pie_principal">
                <?=$footer ?>
            </footer><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>