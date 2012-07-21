<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" 
      href="<?php echo base_url(); ?>statics/css/index.css" />
<section class="nuevo_cliente">
    <form class="agregar_cliente">
        <table>
            <tr>
                <td><label>DATOS PARA FACTURACIÓN:</label></td>
            </tr>
            <tr>
                <td> 
                    <label>NOMBRE:</label>
                    <input type="text" id="nombre_cliente"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>APELLIDO P:</label>
                    <input type="text" id="apellido_p" />
                </td>
            </tr>    
            <tr>
                <td>
                    <label>APELLIDO M:</label>    
                    <input type="text" id="apellido_m" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>RFC:</label>
                    <input type="text" id="rfc" />
                </td>
            </tr>
            <tr>
                <td><label>DATOS DE CONTACTO:</label></td>
            </tr>
            <tr>
                <td> 
                    <label>CALLE Y NUMERO:</label>
                    <input type="text" id="calle_numero" />
                </td>
            </tr>    
            <tr>    
                <td>
                    <label>COLONIA:</label>
                    <input type="text" id="colonia" />    
                </td>
            </tr>
            <tr>   
                <td>
                    <label>DELEGACIÓN O MUNICIPIO:</label>
                    <input type="text" id="delegacion_municipio" />
                </td>
            </tr>    
            <tr>
                <td>
                    <label>CÓDIGO POSTAL:</label>
                    <input type="text" id="codigo_postal" />
                </td>
            </tr>
            
            <tr>
                <td> 
                    <label>PARTICULAR:</label>
                    <input type="text" id="telefono_particular" />
                </td>
            </tr>
            <tr>    
                <td>
                    <label>MÓVIL:</label>
                    <input type="text" id="telefono-movil" />
                </td>
            </tr>
            <tr>    
                <td>
                    <label>CORREO-E:</label>
                    <input type="text" id="correo_electronico" />
                </td>
            </tr>    
            
            
            <tr>
                <td>
                    <input type="reset" value="CANCELAR" />
                </td>
                <td>
                    <input type="submit" value="AGREGAR" />
                </td>    
            </tr>
        </table>
    </form>
</section>

