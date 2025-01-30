<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>    
    <title>Main</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION["username"]; ?>!</h2>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>