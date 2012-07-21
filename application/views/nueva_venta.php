<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" 
      href="<?php echo base_url(); ?>statics/css/index.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/venta.js"></script>
  <section class="venta-productos">  
      <form class="venta">
         <table> 
             <tr>
                 <td>
                     <label>ID O NOMBRE DEL CLIENTE:</label>
                     <input type="text" id="id_cliente"/>
                 </td>
             </tr>
             <tr>
                 <td>
                    <label>CODIGO DE BARRAS:</label>
                    <input type="text" id="codigo_barras" autofocus />
                 </td>
             </tr>
             <tr>
                 <td>
                    <button onclick="agregar_producto()">AGREGAR</button>
                 </td>
             </tr>
    <tr>
        <td>PRECIO</td>
        <td>PRODUCTO</td>
    </tr>
   
    <tr>
        <td><input type="submit" id="vender" value="VENDER"/></td>
        <td><input type="submit" id="cancelar_venta" value="CANCELAR" /></td>
    </tr>
    
    
    </table>
</form>
    </section>