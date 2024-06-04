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
    </style>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="70">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <img src="img/Logo.png" alt="--" class="navbar-brand tamaño" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
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

  <!-- carousel -->
  <header id="home" class="carousel slide small-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Pc_Setup.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenido a Nuestra Tienda</h5>
                <p>Encuentra las mejores computadoras y laptops.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/setup3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Variedad de Productos</h5>
                <p>Tenemos algo para todos.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/setup 1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ofertas Especiales</h5>
                <p>Descubre nuestras promociones.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</header>


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
            <div class="col-md-4 mt-3">
                <div class="card ">
                    <img src="img/img4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop XPG Xenia</h5>
                        <p class="card-text texto" >Laptop XPG Xenia 15G 15.6" Full HD / Intel Core i7-13700H 2.40GHz / 16GB / 1TB SSD / RTX 4060 / Windows 11 Home 64-bit / Office  / XENIAG15I7G13H4060LX-BKCES / DIADEMA GAMER XPG PRECOG DE REGALO!</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4  mt-3">
                <div class="card">
                    <img src="img/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body texto">
                        <h5 class="card-title">Laptop HP Elite x2 G8 Detachable</h5>
                        <p class="card-text">Laptop HP Elite x2 G8 Detachable / Core i5-1145G7 Quad-Core / 256GB SSD M2 / PC-HP-008 / Color blanco / Office activado / Windows 11 home 64-bit / Portable / DIADEMA GAMER XPG PRECOG DE REGALO!</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4  mt-3">
                <div class="card">
                    <img src="img/laptop3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Gamer Lenovo IdeaPad Gaming 3 16ARH7 16</h5>
                        <p class="card-text">Laptop Gamer Lenovo IdeaPad Gaming 3 16ARH7 16" WUXGA / Intel Core i5-12450H 3.30GHz / 8GB / 1TB SSD / NVIDIA GeForce RTX 3050Ti / Windows 11 Home 64-bit / Gris / 82SA00FLLM</p>
                        <a href="producto.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


     <!-- Sección con efecto parallax -->
     <section class="parallax mb-3">
        <h1>Arma tu PC soñada</h1>
      </section>
      
      <!-- CONTENIDO -->
        

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
