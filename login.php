<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #111;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .registration-form {
            max-width: 400px;
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
        }

        .registration-form .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .registration-form .btn-primary:hover {
            background-color: #0056b3;
        }

        .registration-form input {
            margin-bottom: 15px;
        }

        .left-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section img {
            max-width: 100%;
            border-radius: 10px;
        }

        .content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .tamaño {
            width: 5%;
        }

        .posicion {
            margin-top: 125px;
        }

        .posicion1 {
            margin-top: 160px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <img src="img/Logo.png" alt="--" class="navbar-brand tamaño" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-section ">
                    <h2 class="posicion">Datos para la compra</h2>
                    <p>Todos nuestros productos a tu alcance</p>
                    <div class="registration-form">
                        <h3 class="text-center">Llena tus datos para la compra</h3>
                        <form id="registrationForm" method="POST" action="agregar_usuario.php"
                            onsubmit="return validarCampos()">
                            <div class="form-group">
                                <label for="nombre">Nombre de la persona</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingresa tu usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="Ingresa tu correo electrónico" required>
                            </div>
                            <div class="form-group">
                                <label for="numero_tarjeta">Numeración de la tarjeta de D/C</label>
                                <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta"
                                    placeholder="xxxx-xxxx-xxxx-xxxx" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="xxx" required>
                            </div>
                            <div class="form-group">
                                <label for="pais">País</label>
                                <input type="text" class="form-control" id="pais" name="pais"
                                    placeholder="Escribe tu país" required>
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado"
                                    placeholder="Escribe tu estado" required>
                            </div>
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio"
                                    placeholder="Escribe tu municipio" required>
                            </div>
                            <div class="form-group">
                                <label for="colonia">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia"
                                    placeholder="Escribe tu colonia" required>
                            </div>
                            <div class="form-group">
                                <label for="cd">Código Postal</label>
                                <input type="text" class="form-control" id="cd" name="cd"
                                    placeholder="Escribe tu código postal" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                    placeholder="Escribe tu dirección" required>
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña"
                                    placeholder="Ingresa tu contraseña" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmar_contraseña">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="confirmar_contraseña"
                                    name="confirmar_contraseña" placeholder="Confirma tu contraseña" required>
                            </div>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#confirmarCompraModal">Comprar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 right-section posicion1">
                    <img src="img/Setup4.jpg" alt="Viaje en Uber">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmarCompraModal" tabindex="-1" role="dialog"
        aria-labelledby="confirmarCompraModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarCompraModalLabel">Confirmar Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de querer comprar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" onclick="enviarFormulario()">Continuar Compra</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Venta de Computadoras. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
    function validarCampos() {
        var nombre = document.getElementById("nombre").value;
        var correo = document.getElementById("correo").value;
        var numero_tarjeta = document.getElementById("numero_tarjeta").value;
        var cvv = document.getElementById("cvv").value;
        var pais = document.getElementById("pais").value;
        var estado = document.getElementById("estado").value;
        var municipio = document.getElementById("municipio").value;
        var colonia = document.getElementById("colonia").value;
        var cd = document.getElementById("cd").value;
        var direccion = document.getElementById("direccion").value;
        var contraseña = document.getElementById("contraseña").value;
        var confirmar_contraseña = document.getElementById("confirmar_contraseña").value;

        if (nombre === "" || correo === "" || numero_tarjeta === "" || cvv === "" || pais === "" || estado === "" || municipio === "" || colonia === "" || cd === "" || direccion === "" || contraseña === "" || confirmar_contraseña === "") {
            alert("Todos los campos son obligatorios");
            return false;
        }
        return true;
    }

    function enviarFormulario() {
        document.getElementById("registrationForm").submit();
        $('#confirmarCompraModal').modal('hide'); // Cierra el modal después de enviar el formulario
        limpiarCampos(); // Limpia los campos después de enviar el formulario
    }

    function limpiarCampos() {
        document.getElementById("nombre").value = "";
        document.getElementById("correo").value = "";
        document.getElementById("numero_tarjeta").value = "";
        document.getElementById("cvv").value = "";
        document.getElementById("pais").value = "";
        document.getElementById("estado").value = "";
        document.getElementById("municipio").value = "";
        document.getElementById("colonia").value = "";
        document.getElementById("cd").value = "";
        document.getElementById("direccion").value = "";
        document.getElementById("contraseña").value = "";
        document.getElementById("confirmar_contraseña").value = "";
    }
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
