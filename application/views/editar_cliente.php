<section class="editar_cliente">
    <form class="feditar_cliente">
        <table class="teditarcliente">
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
                    <label>RFC:</label>
                    <input type="text" id="rfc" name="rfc" />
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button" id="bedidtar_cliente" 
                            onclick="editar_cliente()">EDITAR</button><!-- llama a editar_cliente()[functión] -->
                    <input type="reset" id="cancelar_formulario" value="LIMPIAR" />
                </td>    
            </tr>
        </table><!-- Termina teditar_clientel[table] -->
    </form><!-- Termina feditar_clientel[form] -->
</section><!-- Termina editar_clientel[section] -->