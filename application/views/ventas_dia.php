<!DOCTYPE html>
<html>
    <head>
        <?php //$head; ?>
        <meta charset="utf-8" />
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1><?php //$seccion; ?></h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                    <table>
                        <tr>
                            <td>Venta no.</td><td>Nombre del cliente</td>
                        </tr>
                    <?php foreach($ventas as $venta): ?>
                    <tr>
                        <form action="<?=base_url(); ?>index.php/ventas/ventas_detalle" method="post">
                        <td><?=$venta['id_venta']; ?></td>
                        <td><?=$clientes[$venta['id_cliente']]['nombre'].' '.$clientes[$venta['id_cliente']]['apellido_p'].' '.$clientes[$venta['id_cliente']]['apellido_m']; ?><td>
                            <td><input type="text" id="numero_venta" name="numero_venta" hidden="hidden" value="<?=$venta['id_venta']; ?>" /></td>
                        <td><input type="submit" value="Ver detalle" /></td>
                        </form>
                    <tr/>
                    <?php endforeach; ?>
                    </table>
                <?php //$contenido; ?>
            </section>
            <nav class="pie_principal">
                <?php //$footer; ?>
            </nav><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>