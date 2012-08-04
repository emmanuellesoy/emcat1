<!DOCTYPE html>
<html>
    <head>
        <?=$head; ?>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1><?=$title; ?></h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <table>
                    <tr>
                        <td>UPC</td>
                        <td>Precio</td>
                        <td>Descuento</td>
                        <td>Precio %</td>
                        <td>Cantidad</td>
                        <td>Subtotal</td>
                    </tr>
                    <?php $total = 0; ?>
                <?php foreach($productos as $producto): ?>
                <tr>
                    <td><?=$producto['id_producto']; ?></td>
                    <td>$<?=bcadd($producto['precio_producto'], '0', 2); ?></td>
                    <td><?=$producto['descuento']; ?>%</td>
                    <td>$<?=bcadd($precio_descuento = (($producto['descuento']*$producto['descuento'])/100), '0', 2); ?></td>
                    <td><?=$producto['cantidad']; ?>pz.</td>
                    <td>$<?=bcadd(($precio_subtotal = $producto['cantidad']*$precio_descuento), '0', 2); ?></td>
                </tr>
                <?php $total = $precio_subtotal + $total; ?>
                <?php endforeach; ?>
                <tr><td></td><td></td><td></td><td></td><td>Total</td><td>$<?=bcadd($total, '0', 2); ?></td></tr>
                </table>
                <?php //$contenido; ?>
            </section>
            <nav class="pie_principal">
                <?=$footer; ?>
            </nav><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>