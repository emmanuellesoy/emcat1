<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>statics/css/lista_productos.css" />
        <script type="text/javascript" src="<?=base_url(); ?>statics/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?=base_url(); ?>statics/js/clientes.js"></script>
        <script type="text/javascript" src="<?=base_url(); ?>statics/js/venta.js"></script>
        <script type="text/javascript">var base = "<?=base_url(); ?>";</script>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1>Lista de productos</h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal listar_productos">
                <table>
                    <?php $es_non = 1;?>
                    <?php foreach ($productos as $producto): ?>
                    <?php
                        $non = $es_non%2;
                        $es_par = ($non == 0) ? 'par' : 'non';
                        $es_non++;
                    ?>
                        <tr class="<?=$es_par; ?>">
                            <td><?=$producto['precio_t']; ?></td>
                            <td><?=$producto['precio_p']; ?></td>
                            <td><?=$producto['forma_f']; ?></td>
                            <td><?=$producto['principio_activo']; ?></td>
                            <td><?=$producto['laboratorio']; ?></td>
                            <td><?=$producto['nombre']; ?></td>
                            <td><?=$producto['upc']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
            <footer class="pie_principal">
                <?=$footer ?>
            </footer><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>