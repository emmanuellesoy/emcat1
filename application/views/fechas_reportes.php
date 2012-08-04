<!DOCTYPE html>
<html>
    <head>
        <?php //$head; ?>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1><?php //$seccion; ?></h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <form action="<?=base_url(); ?>index.php/ventas/mostrar_ventas_dia" method="post">
                    <select id="fecha_venta" name="fecha_venta">
                        <?php foreach($fechas as $fecha): ?>
                        <option><?=$fecha['fecha_compra']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br />
                    <input type="submit" value="Ver fecha" />
                </form>
                <?php //$contenido; ?>
            </section>
            <nav class="pie_principal">
                <?php //$footer; ?>
            </nav><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>