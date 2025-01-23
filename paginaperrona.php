<HTML>
	<HEAD>
		<TITLE>Pagina Perrona</TITLE>
	</HEAD>
	<BODY>
	<?php
	$log = false;
	if (isset($_POST["usuario"]) && isset($_POST["pass"])){
		if ($_POST["usuario"]=="root" && $_POST["pass"]=="123456"){
			$log = true;
			$user= $_POST["usuario"];
		}		
	}
	if($log == true)
	{

		echo "<br>";
		echo "<h3>Bienvenido $user</h3>";		
	}
	else{
	?>
		<FORM method="POST" action ="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Usuario:</label><input type="text" name="usuario" /><br>
		<label>Usuario:</label><input type="password" name="pass" /><br>
		<BUTTON type="submit">Enviar</BUTTON>
		</FORM>
	<?php
	}	
	?>
	</BODY>
</HTML>