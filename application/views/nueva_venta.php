<section class="venta_productos">  
    <form class="fventa_productos">
        <table class="tventa_productos"> 
             <tr>
                 <td>
                     <label>ID O NOMBRE DEL CLIENTE:</label>
                     <input type="text" id="id_cliente"/>
                 </td>
             </tr>
             <tr>
                 <td>
                    <label>CODIGO DE BARRAS:</label>
                    <input type="text" id="codigo_barras" name="codigo_barras" autofocus />
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
                <td><input type="submit" id="cancelar_venta" value="CANCELAR" /></td>
             </tr>
        </table><!-- Termina tabla[tventa_productos] -->
    </form><!-- Termina formulario[fventa_productos] -->
</section><!-- Termina sección[venta_productos] -->