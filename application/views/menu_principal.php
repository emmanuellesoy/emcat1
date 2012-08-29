<!DOCTYPE html>
<html>
    <head>
        <?=$head; ?>
    </head>
    <body>
    <center>
        <section class="marco_general">
            <header class="seccion_actual">
                <img src="<?=base_url(); ?>statics/img/logo.png" />
                <h1><?=$seccion; ?></h1>
            </header><!-- Termina seccion_actual[header] -->
            <section class="area_principal">
                <?=$contenido; ?>
            </section>
            <nav class="pie_principal">
                <?=$footer; ?>
            </nav><!-- Termina pie_principal[footer] -->
        </section><!-- Termina marco_general[section] -->
    </center>
    </body>
</html>