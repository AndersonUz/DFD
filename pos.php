<?php 
if (isset($_GET['user']) && isset($_GET['pass'])) {
    $user = $_GET['user'];
    $password = $_GET['pass'];

    echo "Su usuario es: " . $user . " y su contraseña es: " . $password;
} else {
    echo "Faltan parámetros en la URL. Por favor, proporcione un usuario y una contraseña.";
}
?>
