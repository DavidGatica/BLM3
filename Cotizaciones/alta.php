<?php $atras="algo" ?>

<html>
		<div id="contenido">
		<div id="contenidoCont">
		<div class="centrar">
        <p>Ingrese los datos del cliente que desea agregar:</p><br /><br /><br />
        <form action="altacliente.php" method="POST">

            <input type="text" class="inputChico" placeholder="RFC de la empresa" name="rfc" autofocus >
            <input type="text" class="inputChico" placeholder="Raz&oacute;n social" name="empresa" autofocus required><br /><br />
            <input type="text" class="inputChico" placeholder="Calle y número" name="calle_num" autofocus >
            <input type="text" class="inputChico" placeholder="Municipio/Delegacion" name="municipio" autofocus ><br /><br />    
            <input type="text" class="inputChico" placeholder="Estado" name="estado" autofocus >
            <input type="text" class="inputChico" placeholder="C&oacute;digo Postal" name="cp" autofocus ><br /><br />
            <input type="text" class="inputChico" placeholder="Nombre del contacto" name="contacto" autofocus >
            <input type="text" class="inputChico" placeholder="Departamento" name="departamento" autofocus><br /><br />
            <input type="text" class="inputChico" placeholder="Tel&eacute;fono" name="telefono1" autofocus >
            <input type="text" class="inputChico" placeholder="Tel&eacute;fono Alternativo" name="telefono2" autofocus><br /><br />
            <input type="text" class="inputChico" placeholder="E-mail" name="email" autofocus ><br /><br /><br />
            <input type="submit" value="Agregar" class="botonChico">
        </form>

		</div>
		</div>
		</div>
</html>
