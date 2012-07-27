function editar_cliente(){
    
    alert('Editar');
    
    $.ajax({
            url: "http://localhost/emcat1/index.php/clientes/editar_cliente",
            datatype: "json",
            success: function(data){
                var json = jQuery.parseJSON(data);
                $('p').html(json.nombre);
            }
    });
    
}