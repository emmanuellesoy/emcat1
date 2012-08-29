<!DOCTYPE html>
<html>
    <head>
        <?=$head; ?>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="datos_vendedor">
                Dirección de la farmacia.
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <article class="datos_cliente">
                    <table>
                        <tr>
                            <td class="title">CLIENTE</td>
                        </tr>
                        <tr>
                            <td><?=(isset($productos['cliente']['id_cliente'])) ? $productos['cliente']['nombre'].' '.$productos['cliente']['apellido_p'].' '.$productos['cliente']['apellido_m'] : ''; ?></td>
                        </tr>
                        <tr>
                            <td>Dirección</td>
                        </tr>
                        <tr>
                            <td>
                                <?=(isset($productos['cliente'])) ? $productos['cliente']['calle_numero'].' '.$productos['cliente']['colonia'].', '.$productos['cliente']['delegacion_municipio'].' C.P.'.$productos['cliente']['codigo_postal']: ''; 
                                ?></td>
                        </tr>
                        <tr><td><label>Teléfono </label><?=(isset($productos['cliente'])) ? $productos['cliente']['telefono_p']: ''; ?></td></tr>                        
                    </table>
                </article>
                <article class="datos_factura">
                    <table>
                        <tr>
                            <td class="title">FECHA</td><td></td><td class="title">REMISIÓN NO.</td>
                        </tr>
                        <tr>
                            <td><?=$productos['venta']['fecha_compra']; ?></td>
                            <td></td>
                            <td><?=$productos['venta']['id_venta']; ?></td>
                        </tr>
                        <tr><td class="title" colspan="3">CONDICIONES DE PAGO</td><td></td><td></td></tr>
                        <tr><td colspan="3">CONTADO</td><td></td><td></td></tr>
                    </table>
                </article>
                <article class="datos_productos">
                    <table>
                        <tr>
                            <td class="title">CANTIDAD</td>
                            <td class="title">DESCRICIPCIÓN</td>
                            <td class="title">LAB.</td>
                            <td class="title">PRECIO U.</td>
                            <td class="title">DESC %</td>
                            <td class="title">PRECIO U. NETO</td>
                            <td class="title">IMPORTE TOTAL</td></tr>
                        <?php $total = 0; ?>
                        <?php foreach ($productos['detalles'] as $detalle): ?>
                            <tr>
                                <td><?php print_r($detalle['cantidad']); ?></td>
                                <td></td>
                                <td></td>
                                <td><?php print_r($detalle['precio_p']); ?></td>
                                <td><?php print_r($detalle['descuento']); ?></td>
                                <td><?php print_r($detalle['precio_p']); ?></td>
                                <?php 
                                    $subtotal = ($detalle['cantidad'] * $detalle['precio_p']);
                                    $total = $total + $subtotal;
                                ?>
                                <td><?=$subtotal; ?></td>
                            </tr>
                    <?php endforeach; ?>
                            <tr><td></td><td></td><td></td><td></td><td></td><td><b>Total</b></td><td><?=$total; ?></td></tr>
                    </table>
                </article>
                <article class="firma">
                    <table>
                        <tr><td>DEBO Y PAGARE INCONDICIONALMENTE EN ESTA CIUDAD DE MEXICO, A LA ORDEN DE MARISELA GONZALEZ BARRANCO LA CANTIDAD INDICADA EN ESTA NOTA DE REMISION Y QUE AMPARA EL VALOR RECIBIDO EN MERCANCIA  A MI ENTERA SATISFACION DE CONFORMIDAD A LO DISPUESTO POR EL ART. 170 Y DEMAS RELATIVOS DE LA LEY GENERAL DE TITULOS Y OPERACIONES DE CREDITO. EN CASO DE NO CUBRIRSE ESTA REMISION A SU VENCIMIENTO, CAUSARA INTERESES MORATORIOS AL TIPO DEL 5 % MENSUAL, PAGADEROS EN ESTA CD. DE MEXICO.</td></tr>
                        <tr><td><b>NOMBRE Y FIRMA</b></td></tr>
                    </table>
                </article>
            </section><!-- Termina area_principal[section] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>