/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function agregar_producto(){
    
    var upc = $('#codigo_barras').val();

    var cant = prompt("cantidad");
        
    var desc = prompt("descuento", "33");
    
    uri = base+'index.php/ventas/agregar_producto/'+upc;
    
    /*alert(uri);*/
    
    $.ajax({

        url: uri,
        
        success: function(data){
        
            var json = jQuery.parseJSON(data);
            
            var pDesc = json.precio_p - ((json.precio_p * desc) / 100);
            
            var subT = (pDesc * cant).toFixed(2);
            
            var row = '<tr><td>'+subT+'</td><td>'+desc+'</td><td>'+cant+'</td><td>'+json.precio_p+'</td><td>'+json.nombre+'</td></tr>';
            
            $('#tinsert_productos').append(row);
            
            $('#codigo_barras').val('').focus();
            
        }
    });

    
}