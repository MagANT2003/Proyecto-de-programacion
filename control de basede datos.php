<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "usuariosfinales";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recibir los datos del formulario
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Validar que los campos no estén vacíos
    if (!empty($email) && !empty($user) && !empty($pass)) {
        // Cifrar la contraseña antes de almacenarla
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Preparar y enlazar la sentencia SQL
        $stmt = $conn->prepare("INSERT INTO usuariosfinales (Correo_electronico, Usuario, contraseña) VALUES ($email, $user,  $pass)");
        $stmt->bind_param("sss", $email, $user, $hashed_password);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            echo "Registro completado con éxito.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Todos los campos son obligatorios.";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Error en el envío del formulario.";
}
?>