/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function agregar_producto(){
    
    var upc = $('#codigo_barras').val();

    var cant = prompt("cantidad", "1");
        
    var desc = prompt("descuento", "20");
    
    var id_venta = $('#id_venta').html();
    
    var uri = base+'index.php/ventas/agregar_producto/'+upc;
    
    //alert(uri);
    
    $.ajax({

        url: uri,
        
        data: 'descuento='+desc+'&cantidad='+cant+'&id_venta='+id_venta,
        
        type: 'post',
        
        success: function(data){
        
            var json = jQuery.parseJSON(data);
            
            var pDesc = json.precio_p - ((json.precio_p * desc) / 100);
            
            var subT = (pDesc * cant).toFixed(2);
            
            var row = '<tr id="'+json.id_producto+'"><td>'+subT+' <label id="eliminar_'+json.id_producto+'" onclick="borrar_producto('+json.id_producto+')">[X]</label></td><td>'+desc+'</td><td>'+cant+'</td><td>'+json.precio_p+'</td><td>'+json.nombre+'</td></tr>';
            
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
           if(typeof json.nombre != 'undefined'){
               $('#datos_cliente').html('<label>Vendido a '+json.nombre+' '+json.apellido_p+' '+json.apellido_m+'</label>');
           } else {
               $('#datos_cliente').html('<label>Venta de mostrador</label>');
           }
           $('#codigo_barras').focus();
       }
    });
    
}

function eliminar_producto(id_producto){
   
   var uri = base+'index.php/productos/borrar';
   
   $.ajax({
       url:uri,
       data: 'id_producto='+id_producto,
       type: 'post',
       success: function(){
           $('#'+id_producto).css('background-color', '#ff00ff').fadeOut(2000);
       }
   });

}

function borrar_producto(id_producto){
   
        var id_venta = $('#id_venta').html();
        var uri = base+'index.php/ventas/borrar_un_producto';
        $.ajax({
            url:uri,
            data: 'id_producto='+id_producto+'&id_venta='+id_venta,
            type:'post',
            success: function(){
                $('#'+id_producto).fadeOut(1500);
            }
        });
   
}