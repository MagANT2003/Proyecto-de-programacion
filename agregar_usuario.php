<?php
// Verificar si se recibieron datos del formulario y que todos los campos estén completos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["numero_tarjeta"]) && isset($_POST["cvv"]) && isset($_POST["pais"]) && isset($_POST["estado"]) && isset($_POST["municipio"]) && isset($_POST["colonia"]) && isset($_POST["cd"]) && isset($_POST["direccion"]) && isset($_POST["contraseña"])) {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $cvv = $_POST["cvv"];
    $pais = $_POST["pais"];
    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];
    $colonia = $_POST["colonia"];
    $cd = $_POST["cd"];
    $direccion = $_POST["direccion"];
    $contraseña = $_POST["contraseña"];

    // Verificar que ninguno de los campos esté vacío
    if (!empty($nombre) && !empty($correo) && !empty($numero_tarjeta) && !empty($cvv) && !empty($pais) && !empty($estado) && !empty($municipio) && !empty($colonia) && !empty($cd) && !empty($direccion) && !empty($contraseña)) {
        // Establecer la conexión con la base de datos
        $servername = "localhost";
        $username_db = "root"; // Reemplaza con tu usuario de la base de datos
        $password_db = "123456"; // Reemplaza con tu contraseña de la base de datos
        $dbname = "pcbuild"; // Reemplaza con el nombre de tu base de datos

        // Crear conexión
        $conexion = new mysqli($servername, $username_db, $password_db, $dbname);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO usuarios (nombre, correo, numero_tarjeta, cvv, pais, estado, municipio, colonia, cd, direccion, contraseña) VALUES ('$nombre', '$correo', '$numero_tarjeta', '$cvv', '$pais', '$estado', '$municipio', '$colonia', '$cd', '$direccion', '$contraseña')";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }

        // Cerrar la conexión
        $conexion->close();
    } else {
        echo "Todos los campos son obligatorios";
    }
} else {
    echo "No se recibieron datos del formulario";
}
?>
