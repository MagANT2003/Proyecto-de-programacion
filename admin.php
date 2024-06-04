<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <?php
    // Incluir el archivo PHP que contiene el código para agregar viaje
    include 'delete_user.php';
    ?>
    <div class="container mt-5 shadow-lg p-3 bg-body-tertiary rounder">
        <h2 class="mb-4" style="text-align: center;">Lista de Usuarios</h2>
        <form class="mb-4" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar por ID o nombre" name="search">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>CVV</th>
                        <th>PAIS</th>
                        <th>ESTADO</th>
                        <th>MUNUCIPIO</th>
                        <th>COLONIA</th>
                        <th>CD</th>
                        <th>DIRECCION</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mostrar los viajes obtenidos de la base de datos
                    $servername = "localhost";
                    $username = "root";
                    $password = "123456";
                    $dbname = "pcbuild";

                    $conexion = new mysqli($servername, $username, $password, $dbname);

                    if ($conexion->connect_errno) {
                        echo "Error en la conexión: " . $conexion->connect_error;
                    } else {
                        // Verificar si se recibió un valor de búsqueda
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            // Modifica la consulta SQL para que tenga en cuenta el valor de búsqueda
                            $sql = "SELECT * FROM usuarios WHERE ID LIKE '%$search%' OR NOMBRE LIKE '%$search%' OR CORREO LIKE '%$search%'";
                        } else {
                            // Consulta SQL para seleccionar todos los viajes si no hay un valor de búsqueda
                            $sql = "SELECT * FROM usuarios";
                        }

                        $result = $conexion->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID"] . "</td>";
                                echo "<td>" . $row["NOMBRE"] . "</td>";
                                echo "<td>" . $row["CORREO"] . "</td>";
                                echo "<td>" . $row["CVV"] . "</td>";
                                echo "<td>" . $row["PAIS"] . "</td>";
                                echo "<td>" . $row["ESTADO"] . "</td>";
                                echo "<td>" . $row["MUNICIPIO"] . "</td>";
                                echo "<td>" . $row["COLONIA"] . "</td>";
                                echo "<td>" . $row["CD"] . "</td>";
                                echo "<td>" . $row["DIRECCION"] . "</td>";
                                // No se recomienda imprimir la contraseña en un entorno de producción
                                // echo "<td>" . $row["CONTRASEÑA"] . "</td>";
                                echo "<td><form method='POST'><input type='hidden' name='idE' value='" . $row["ID"] . "'><button type='submit' class='btn btn-danger'>Eliminar</button></form></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No hay usuarios disponibles</td></tr>";
                        }

                        // Cerrar la conexión
                        $conexion->close();
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="container mt-5 shadow-lg p-3 bg-body-tertiary rounder col-lg-6 col-sm-12 col-md-12">
        <h2 class="mb-4" style="text-align: center;">Modificar Usuario</h2>
        <form id="editForm" method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nuevo Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Nueva Correo:</label>
                <input type="text" class="form-control" id="correo" name="correo" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <?php
    // Incluir el archivo PHP que contiene el código para agregar viaje
    include 'actualizar_usuario.php';
    ?>



    <script>
        // Mostrar el modal de éxito después de enviar el formulario
        $('#editForm').submit(function (event) {
            event.preventDefault(); // Evitar el envío del formulario por defecto
            var formData = $(this).serialize(); // Obtener los datos del formulario

            // Enviar la solicitud AJAX para actualizar el viaje
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function (response) {
                    // Mostrar el modal de éxito
                    $('#modalExito').modal('show');
                    // Actualizar la página después de 2 segundos
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>