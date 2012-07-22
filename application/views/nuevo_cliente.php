<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="nuevo_cliente">
    <form class="fnuevo_cliente" method="post" action="<?=base_url() ?>index.php/clientes/alta">
        <table id="tnuevo_cliente">
            <tr>
                <td><label>DATOS PARA FACTURACIÓN:</label></td>
            </tr>
            <tr>
                <td> 
                    <label>NOMBRE:</label>
                    <input type="text" id="nombre_cliente" name="nombre_cliente" autofocus/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>APELLIDO P:</label>
                    <input type="text" id="apellido_p" name="apellido_p" />
                </td>
            </tr>    
            <tr>
                <td>
                    <label>APELLIDO M:</label>    
                    <input type="text" id="apellido_m" name="apellido_m" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>RFC:</label>
                    <input type="text" id="rfc" name="rfc" />
                </td>
            </tr>
            <tr>
                <td><label>DATOS DE CONTACTO:</label></td>
            </tr>
            <tr>
                <td> 
                    <label>CALLE Y NUMERO:</label>
                    <input type="text" id="calle_numero" name="calle_numero" />
                </td>
            </tr>    
            <tr>    
                <td>
                    <label>COLONIA:</label>
                    <input type="text" id="colonia" name="colonia" />    
                </td>
            </tr>
            <tr>   
                <td>
                    <label>DELEGACIÓN O MUNICIPIO:</label>
                    <input type="text" id="delegacion_municipio" name="delegacion_municipio" />
                </td>
            </tr>    
            <tr>
                <td>
                    <label>CÓDIGO POSTAL:</label>
                    <input type="text" id="codigo_postal" name="codigo_postal" />
                </td>
            </tr>
            
            <tr>
                <td> 
                    <label>TÉLEFONO PARTICULAR:</label>
                    <input type="tel" id="telefono_particular" name="telefono_particular" />
                </td>
            </tr>
            <tr>    
                <td>
                    <label>TÉLEFONO MÓVIL:</label>
                    <input type="tel" id="telefono_movil" name="telefono_movil" />
                </td>
            </tr>
            <tr>    
                <td>
                    <label>CORREO-E:</label>
                    <input type="email" id="correo_e" name="correo_e" />
                </td>
            </tr>    
            <tr>
                <td>
                    <input type="submit" id="agrega_cliente" value="AGREGAR" />
                </td>
                <td>
                    <input type="reset" id="cancelar_formulario" value="LIMPIAR" />
                </td>    
            </tr>
        </table><!-- Termina tabla[tnuevo_cliente] -->
    </form><!-- Termina formulario[fnuevo_cliente] -->
</section><!-- Termina sección[nuevo_cliente] -->

