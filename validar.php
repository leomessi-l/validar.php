<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario"; // Cambiar por tu nombre de usuario
$password = "tu_contraseña"; // Cambiar por tu contraseña
$dbname = "baseddatololoog"; // Cambiar por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consultar la base de datos
$sql = "SELECT * FROM log in WHERE usuario='$usuario' AND password ='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
// Inicio de sesión exitoso
echo "Inicio de sesión exitoso. Bienvenido, $usuario.";
} else {
// Error en las credenciales
echo "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
}
$conn->close();
?>
