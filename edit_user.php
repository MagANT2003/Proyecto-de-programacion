<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbuild";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["user_id"])) {
    $userId = $_GET["user_id"];

    // Realizar la consulta para obtener la información del usuario con el ID proporcionado
    $sql = "SELECT * FROM usuarios WHERE id=$userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar un formulario con los datos del usuario para que el administrador pueda editarlos
        while($row = $result->fetch_assoc()) {
            // Aquí puedes mostrar un formulario prellenado con los datos del usuario para que el administrador los edite
        }
    } else {
        echo "Usuario no encontrado";
    }
}

// Cerrar la conexión
$conn->close();
?>
