<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" 
      href="<?php echo base_url(); ?>statics/css/index.css" />
<section id="agregar_producto">
    <form id="fagregar_producto">
        <table id="tagregar_producto">
            <tr>
                <td>
                    <label>UPC</label>
                    <input type="text" id=" upc" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>LABORATORIO:</label>
                    <input type="text" id="laboratorio_producto" />
                </td>
            </tr>  
            <tr>
                <td>
                    <label>NOMBRE_COMERCIAL:</label>
                    <input type="text" id="nombre_producto" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>PRINCIPÌO ACTIVO, CONC. CONCENTRACIÓN:</label>
                    <input type="text" id="pactivo_producto" />
                </td>    
            </tr>
            <tr>
                <td>
                    <label>FORMA FARMACEUTICA PERCENTACIÓN:</label>
                    <input type="text" id="ffarmaceutica_producto" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>PRECIO PUBLICO:</label>
                    <input type="text" id="ppublico_producto" />
                </td>
            </tr>
            <tr>
                <td>               
                    <label>PRECIO TERCERA:</label>
                    <input type="text" id="ptercera_producto" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" id="cancelar_formulario" value="CANCEL" />
                    <input type="submit" id="bagrega_producto" value="GUARDAR" />
                </td>
            </tr>
        </table><!-- Termina tabla[agregar_producto] -->
    </form><!-- Termina formulario[fagregar_producto] -->    
</section><!-- Termina sección[agregar_producto] -->