<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" 
      href="<?php echo base_url(); ?>statics/css/index.css" />
<secton id="borrar_producto">
    <form id="fborrar_producto">
        <table id="tborrar_producto">
            <tr>
                <td>
                    <label>UPC O NOMBRE DEL PRODUCTO:</label>
                    <input type="text" id="tbuscar_producto" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" id="bbuscar_producto" value="BUSCAR" />
                </td>
            </tr>    
        </table><!-- Termina tabla[tborrar_producto] -->
    </form><!-- Termina formulario[fborrar_producto] -->
</secton><!-- Termina sección[borrar_producto] -->