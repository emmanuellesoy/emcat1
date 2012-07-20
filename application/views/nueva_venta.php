<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/venta.js"></script>
    
    <label>CODIGO DE BARRAS:</label>
    <input type="text" id="codigo_barras" />
    <button onclick="agregar_producto()">AGREGAR</button>
    <label>ID O NOMBRE DEL CLIENTE:</label>
    <input type="text" id="id_cliente"/>
<table class="venta-productos">
    <tr>
        <td>PRODUCTO</td>
        <td>PRECIO</td>
        <td>DESCUENTO:<input type="checkbox" checked="checked" /></td>
    </tr>
</table>
<form>
    <input type="submit" id="vender" value="VENDER"/>
    <input type="submit" id="cancelar_venta" value="CNACELAR" />
</form>