<?php if (!isset($_SESSION['usuario'])) {
    header('Location: relogin.php'); ?>

<?php } else { ?>
    <html>
		<div id="contenido">
		<div id="contenidoCont">
		<div class="centrar">

        <p>Ingrese los datos del usuario que desea agregar:</p>
        <br><br>
        <form method="POST" onSubmit="return Password()" action="altausuario.php">

            <input type="text" class="inputChico" placeholder="Nombre de usuario" name="id_usuariog" autofocus required>

            <select name="permiso" class="inputChico" required>
                <option disabled selected>Seleccionar tipo usuario</option>
                <option value="2">Vendedor</option>
                <option value="1">Administrador</option>
            </select> <br><br>

            <input type="text" class="inputChico" placeholder="Nombre" name="nombre"  required>

            <input type="text" class="inputChico" placeholder="Apellido paterno" name="apellido_p"  required><br><br>

            <input type="text" class="inputChico" placeholder="Apellido materno" name="apellido_m" required>

            <input type="text" class="inputChico" placeholder="E-mail" name="e_mail" required><br><br>
            
            <input type="text" class="inputChico" placeholder="Telefono 1" name="telefono1" required>
            
            <input type="text" class="inputChico" placeholder="Telefono 2 (opcional)" name="telefono2"><br><br>

            <input type="password" id="passwd" class="inputChico" placeholder="Password" name="passwordy" required >

			<br><br><br>


            <input type="submit" value="Agregar" class="botonChico">
        </form>


    <?php } ?>

	</div>
	</div>
	</div>
</html>
