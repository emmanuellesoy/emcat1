function editar_cliente(id_cliente){
    var datos = $('form').serialize();
    $.ajax({
            url: base+"index.php/clientes/editar_cliente/"+id_cliente,
            type: 'post',
            data: datos,
            datatype: "json",
            success: function(data){
                $('#mensaje').html('Actualizado').fadeOut(5000);
            }
    });
    
}
function editar_producto(){
    var datos = $('form').serialize();
    $.ajax({
            url: base+"index.php/productos/editar_producto/",
            type: 'post',
            data: datos,
            datatype: "json",
            success: function(data){
                $('#mensaje').html('Actualizado').fadeOut(5000);
            }
    });
    
}