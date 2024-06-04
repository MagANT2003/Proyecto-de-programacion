<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Venta de Computadoras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
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
    .tamaño{
            width: 5%;
        }
</style>
<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <img src="img/Logo.png" alt="--" class="navbar-brand tamaño" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="#products">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
<!--  -->
  <!-- Main Content -->
  <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-section">
                <h2>Registrate</h2>
                <p>Todos nuestros productos a tu alcance</p>
                <div class="card">
                    <h3 class="text-center">Las mejores PC</h3>
                   
                </div>
            </div>
            <div class="col-md-6 right-section">
                <img src="img/Pc_Setup.jpeg" alt="Viaje en Uber">
            </div>
        </div>
    </div>
</div>
<!--  -->
    <!-- Main Section -->
<section id="main" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Productos destacados del día</h2>
                <p class="lead">Explora nuestra gama de computadoras y laptops de alta calidad.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <img src="img/comp1-5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">PRIDE GAMING SNEAKER X </h6>
                        <p class="card-text">Computadora PRIDE GAMING SNEAKER X / NVIDIA GeForce RTX 4080 SUPER / INTEL CORE i9-14900KF / 64GB RAM / 4TB SSD M.2 NVMe / ENF. LIQUIDO</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/Comp2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">PRIDE GAMING PBA WHITE WOLF</h6>
                        <p class="card-text">Computadora PRIDE GAMING PBA WHITE WOLF / NVIDIA GeForce RTX 4060 / AMD Ryzen 5 5500 / 32GB RAM / 1TB SSD / 650W 80+ BRONZE .</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/comp3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">PRIDE GAMING KAIJU</h6>
                        <p class="card-text">Computadora PRIDE GAMING KAIJU CAT:5 / Intel Core i9-14900KF / NVIDIA GeForce RTX 4090 / 64GB DDR5 RAM / 2TB SSD M.2 NVMe / 2TB HHD</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Product Modals -->
    <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel1">PRIDE GAMING SNEAKER X 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Detalles completos de la Computadora 1.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel2">PRIDE GAMING PBA WHITE WOLF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Computadora PRIDE GAMING PBA WHITE WOLF / NVIDIA GeForce RTX 4060 / AMD Ryzen 5 5500 / 32GB RAM / 1TB SSD / 650W 80+ BRONZE / INCLUYE WIFI</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel3">Computadora 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Detalles completos de la Computadora 3.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
