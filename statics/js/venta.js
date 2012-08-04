/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function agregar_producto(){
    
    var upc = $('#codigo_barras').val();

    var cant = prompt("cantidad");
        
    var desc = prompt("descuento", "20");
    
    var id_venta = $('#id_venta').html();
    
    var uri = base+'index.php/ventas/agregar_producto/'+upc;
    
    /*alert(uri);*/
    
    $.ajax({

        url: uri,
        
        data: 'descuento='+desc+'&cantidad='+cant+'&id_venta='+id_venta,
        
        success: function(data){
        
            var json = jQuery.parseJSON(data);
            
            var pDesc = json.precio_p - ((json.precio_p * desc) / 100);
            
            var subT = (pDesc * cant).toFixed(2);
            
            var row = '<tr id="'+json.upc+'"><td>'+subT+' <label id="eliminar_'+upc+'">[X]</label></td><td>'+desc+'</td><td>'+cant+'</td><td>'+json.precio_p+'</td><td>'+json.nombre+'</td></tr>';
            
            $('#tinsert_productos').append(row);
            
            $('#codigo_barras').val('').focus();
            
        }
    });

    
}

function buscar_cliente(){
    
    var cliente = $('#id_cliente_buscar').val();
    
    var id_venta = $('#id_venta').html();
    
    var uri = base+'index.php/clientes/buscar_cliente/'+cliente+'/'+id_venta;
    
    $.ajax({
       url:uri,
       success:function(data){
           var json = jQuery.parseJSON(data);
           $('#datos_cliente').html('<label>Vendido a '+json.nombre+' '+json.apellido_p+' '+json.apellido_m+'</label>');
           $('#codigo_barras').focus();
       }
    });
    
}