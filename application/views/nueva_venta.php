<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

    
    <label>CODIGO DE BARRAS</label>
    <input type="text"  />
    <button onclick="agregar_producto()">AGREGAR</button>
    <label>DESCUENTO</label>
    <input type="text" value="33"/>
    <label>%</label>
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