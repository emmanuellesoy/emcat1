<h3>Buscar por número de cliente</h3>
<form action="<?=base_url() ?>index.php/clientes/buscar_clientes" method="post" />
    <input id="apellido_p" name="apellido_p" type="text" autofocus />
    <br />
    <input type="submit" id="agrega_cliente" value="BUSCAR" />
    <input type="reset" id="cancelar_formulario" value="LIMPIAR" />
</form>