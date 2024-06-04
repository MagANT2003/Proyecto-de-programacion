<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio - Venta de Computadoras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .tamaño{
            width: 5%;
        }
        .pos{
            margin-top: 20px;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="70">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
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
                    <a class="nav-link" href="products.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
      
      <!-- CONTENIDO -->
      <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #111;
            color: #fff;
        }
        .product-image {
            max-width: 100%;
        }
        .product-details {
            margin-top: 100px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .price {
            font-size: 2em;
            color: #00f;
        }
        .availability {
            color: #f00;
        }
        .thumbnails img {
            width: 80px;
            height: auto;
            margin: 5px;
        }
    </style>
</head>
<body>

<div class="container pos">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center">
                <img src="img/comp1-4.png" alt="Producto" class="product-image">
            </div>
            <div class="thumbnails text-center">
                <img src="img/comp1-1.png" alt="thumb1">
                <img src="img/comp1-2.png" alt="thumb2">
                <img src="img/comp1-3.png" alt="thumb3">
                <img src="img/comp1-5.png" alt="thumb4">
            </div>
        </div>
        <div class="col-md-6 product-details">
            <h3>Computadora PRIDE GAMING SNEAKER X / NVIDIA GeForce RTX 4080 SUPER / INTEL CORE i9-14900KF / 64GB RAM / 4TB SSD M.2 NVMe / ENF. LIQUIDO</h3>
            <p class="availability">DISPONIBLES: 1</p>
            <p>Computadora PRIDE GAMING SNEAKER X / NVIDIA GeForce RTX 4080 SUPER / INTEL CORE i9-14900KF / 64GB RAM / 4TB SSD M.2 NVMe / ENF. LIQUIDO</p>
            <div class="price">$67,999.00</div>
            <p>Para saber el precio del envío por favor agrega el producto a tu carrito.</p>
            <div class="d-flex align-items-center">
                <label for="quantity" class="mr-2">CANTIDAD:</label>
                <input type="number" id="quantity" name="quantity" class="form-control mr-2"  style="width: 70px;" min="1" value="1">
                <a href="login.php"  class="btn btn-primary">Agregar al carrito</a> 
            </div>
            <p class="mt-2">Las existencias pueden variar sin previo aviso</p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Main Section -->
<section id="main" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="lead">Puede interesarte:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
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
                        <p class="card-text">Computadora PRIDE GAMING PBA WHITE WOLF / NVIDIA GeForce RTX 4060 / AMD Ryzen 5 5500 / 32GB RAM / 1TB SSD / 650W 80+ BRONZE / INCLUYE WIFI.</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/comp3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"> PRIDE GAMING KAIJU</h6>
                        <p class="card-text">Computadora PRIDE GAMING KAIJU CAT:5 / Intel Core i9-14900KF / NVIDIA GeForce RTX 4090 / 64GB DDR5 RAM / 2TB SSD M.2 NVMe / 2TB HHD</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Venta de Computadoras. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
