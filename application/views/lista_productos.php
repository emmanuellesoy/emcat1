<!DOCTYPE html>
<html>
    <head>
        <?=$head; ?>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <h1>Lista de productos</h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal listar_productos">
                <table>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
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