<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Venta de Computadoras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <style>
        gallery-item {
            position: relative;
            overflow: hidden;
        }
        .gallery-item img {
            width: 100%;
            height: 250px; /* Ajusta la altura según tu preferencia */
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .gallery-item:hover .overlay {
            opacity: 1;
        }
        .Fondo{
            background-color: black;
        }
        .tamaño{
            width: 5%;
        }
    </style>
</head>
<body class="Fondo">
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
                    <a class="nav-link" href="#gallery">Galería</a>
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

    <!--  -->
    <!--  -->
    <header id="home" class="carousel slide small-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a Nuestra Tienda</h5>
                    <p>Encuentra las mejores computadoras y laptops.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Pc_Setup.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Variedad de Productos</h5>
                    <p>Tenemos algo para todos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
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
    
    <!--  -->

    <!--  -->
        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Imagen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="" class="img-fluid" alt="Imagen Modal">
                    </div>
                </div>
            </div>
        </div>
    <!--  -->
    <!-- galeria -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/img1.jpg" data-fancybox="gallery">
                    <img src="img/img1.jpg" class="img-fluid" alt="Imagen 1">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/img2.jpeg" data-fancybox="gallery">
                    <img src="img/img2.jpeg" class="img-fluid" alt="Imagen 2">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/img3.jpg" data-fancybox="gallery">
                    <img src="img/img3.jpg" class="img-fluid" alt="Imagen 3">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/img6.jpg" data-fancybox="gallery">
                    <img src="img/img6.jpg" class="img-fluid" alt="Imagen 4">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/setup 1.jpg" data-fancybox="gallery">
                    <img src="img/setup 1.jpg" class="img-fluid" alt="Imagen 5">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
            <div class="col-md-4 col-12 mb-4 col-lg-4 col-sm-6 gallery-item">
                <a href="img/setup3.jpg" data-fancybox="gallery">
                    <img src="img/setup3.jpg" class="img-fluid" alt="Imagen 6">
                    <div class="overlay">PCBuild te entrega los mejores productos.</div>
                </a>
            </div>
        </div>
    </div>

    <!--  -->
    <!--  -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Venta de Computadoras. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
    <!-- Script personalizado -->
    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
        }
    </script>

