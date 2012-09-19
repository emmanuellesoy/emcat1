<?php
    if(!isset($_POST['upc_buscar'])){
?>
    <h1>Ingrese Código de barras</h1>
    <form action="?" method="post">
            <input type="text" name="upc_buscar" autofocus />
            <input type="submit" />
        </form>
<?php
    } else {
?>
<section class="editar_producto">
    <form class="feditar_producto">
        <input type="hidden" value="<?=$datos_productos['id_producto']; ?>" name="id_producto" />
        <table class="teditar_producto">
            <tr>
                <td>
                    <label>UPC</label>
                    <input type="text" id="upc" name="upc" autofocus value="<?=trim($datos_productos['upc']); ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>LABORATORIO:</label>
                    <input type="text" id="laboratorio" name="laboratorio" value="<?=trim($datos_productos['laboratorio']); ?>"/>
                </td>
            </tr>  
            <tr>
                <td>
                    <label>NOMBRE_COMERCIAL:</label>
                    <input type="text" id="nombre" name="nombre" value="<?=trim($datos_productos['nombre']); ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>PRINCIPÍO ACTIVO, CONC. CONCENTRACIÓN:</label>
                    <input type="text" id="rincipio_activo" name="principio_activo" value="<?=trim($datos_productos['principio_activo']); ?>"/>
                </td>    
            </tr>
            <tr>
                <td>
                    <label>FORMA FARMACEUTICA PERCENTACIÓN:</label>
                    <input type="text" id="forma_f" name="forma_f" value="<?=trim($datos_productos['forma_f']); ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>PRECIO PUBLICO:</label>
                    <input type="number" id="precio_p" name="precio_p" value="<?=trim($datos_productos['precio_p']); ?>" />
                </td>
            </tr>
            <tr>
                <td>               
                    <label>PRECIO TERCERA:</label>
                    <input type="number" id="precio_t" name="precio_t" value="<?=trim($datos_productos['precio_t']); ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button" id="bedidtar_cliente" onclick="editar_producto()">EDITAR</button>
                    <!-- llama a editar_cliente()[functión] -->
                    <input type="reset" id="cancelar_formulario" value="LIMPIAR" />
                </td>    
            </tr>
        </table>
    </form>
</section>
<?php } ?>