<?php $id_venta = $this->uri->segment(4); ?>
<section class="venta_productos">
    <p>Número de venta: <span id="id_venta"><?=$id_venta ?></span></p>
    <div id="datos_cliente"></div>
    <form class="fventa_productos" action ="<?=base_url(); ?>index.php/ventas/ventas_detalle/<?=$id_venta; ?>" method="post">
        <table class="tventa_productos"> 
             <tr>
                 <td>
                     <input type="button" id="agregar_cliente" value="Agregar Cliente a la Venta" onclick="buscar_cliente()" />
                 </td>
                 <td>
                     <label>Número del cliente</label>
                     <input type="text" id="id_cliente_buscar" autofocus/>
                 </td>
             </tr>
             <tr>
                 <td>
                    <label>CODIGO DE BARRAS:</label>
                    <input type="text" id="codigo_barras" name="codigo_barras" />
                 </td>
             </tr>
             <tr>
                 <td>
                     <input type="button" id="producto_semivendido" onclick="agregar_producto()" value ="AGREGAR"/>
                 </td>
             </tr>
        </table><!-- Termina tabla[tvender_productos] -->
        <table id="tprecio_producto">     
             <tr>
                <td>SUBTOTAL</td>
                <td>DESCUENTO</td>
                <td>CANTIDAD</td>
                <td>PRECIO</td>
                <td>PRODUCTO</td>
             </tr>
        </table><!-- Termina tabla[tprecio_producto] -->
        <table id="tinsert_productos">
            
        </table><!-- Termina tabla[tinsert_productos] -->
        <table id="tventa_productos">    
             <tr>
                <td><input type="submit" id="vender" value="VENDER"/></td>
                <td><input type="reset" id="cancelar_venta" value="CANCELAR" /></td>
             </tr>
        </table><!-- Termina tabla[tventa_productos] -->
    </form><!-- Termina formulario[fventa_productos] -->
</section><!-- Termina sección[venta_productos] -->