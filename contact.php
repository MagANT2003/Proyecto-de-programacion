<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Venta de Computadoras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    position: relative;
    padding-top: 56px; /* Altura del navbar */
    background-color: #111;
    color: #fff;
}

section {
    padding: 60px 0;
}

.carousel-caption h5 {
    font-size: 4rem;
    font-weight: bold;
}

footer {
    position: relative;
    bottom: 0;
    width: 100%;
}

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

/* carrousel gallery */
.small-carousel {
  margin: 0 auto;   /* Centra el carrusel horizontalmente */
}

.small-carousel .carousel-item img {
  height: 400px; /* Ajusta la altura de las imágenes */
  object-fit: cover; /* Asegura que la imagen cubra toda el área sin deformarse */
}

/* carousel index */
.small-carousel1 {
  margin: 0 auto;   /* Centra el carrusel horizontalmente */
}

.small-carousel1 .carousel-item img {
  height: 600px; /* Ajusta la altura de las imágenes */
  object-fit: cover; /* Asegura que la imagen cubra toda el área sin deformarse */
}
/*  */

    /* Estilos para el parallax */
    .parallax {
        background-image: url('img/pclianli.gif'); /* Ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        height: 50vh; /*Altura de la sección */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
      }

      .parallaxabout {
        background-image: url('img/cmptr.gif'); /* Ruta de tu imagen de fondo */
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        height: 50vh; /*Altura de la sección */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
      }
  
      .parallax h1 {
        font-size: 3em;
      }
  
      /* Otros estilos */
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }
  
      /* Otros estilos para las secciones */
      section {
        padding: 50px 0;
      }
  
      .content {
        text-align: center;
      }

      /* .bg-navy {
        background-color: navy; 
      } */

/*  */
.card {
  background-color: rgb(50, 49, 49);
  color: #fff;
}
.card-body {
  background-color: #000;
  color: #fff;
}
.card .btn {
  background-color: #007bff;
  color: #fff;
}
.card .btn:hover {
  background-color: #0056b3;
}
/* galeria */
/* galeria */
/* galeria */
.card-hover {
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative;
    overflow: hidden;
}

.card-hover:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-hover .overlay-text {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: 1;
}

.card-hover:hover .overlay-text {
    display: block;
}

.card-hover .card-body {
    position: relative;
}

.card-hover .card-img-top {
    transition: filter 0.3s ease;
    max-height: 200px; /* Ajusta según sea necesario */
}

.card-hover:hover .card-img-top {
    filter: brightness(70%);
}

.card-hover .modal-body {
    padding: 0;
}


/* nosotros */


        body {
            font-family: Arial, sans-serif;
            background-color: #1c1c1c;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header, .branch {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            text-align: center;
            color: #00b0ff;
        }
        .header p {
            text-align: center;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .branch {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .branch h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .branch img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .map {
            margin-bottom: 10px;
        }

        .esp {
            margin-top: 80px;
        }

        @media (min-width: 768px) {
            .branch {
                flex-direction: row;
                justify-content: space-between;
            }
            .branch .info {
                flex: 1;
                margin-left: 20px;
            }
        }
        .tamaño{
            width: 5%;
        }
  
</style>
<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
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
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>


    <!--  -->
   
    <div class="container esp">
        <div class="header">
            <h1>📦 Enviamos a toda la República Mexicana.</h1>
            <p><strong>ATENCIÓN A VENTAS EN LÍNEA</strong></p>
            <p>Teléfonos: 33 15231303 / 33 28770435</p>
            <p>Email: ventas@PcBuild.mx</p>
            <p>Soporte técnico y garantías: soporte@PcBuild.mx</p>
            <p>Horario de atención: Lunes a Viernes: 09:00 - 02:30 y 03:30 - 06:00, Sábados: 10:00am - 01:00pm</p>
        </div>
        <center><img src="img/Logo.png" alt="Sucursal Jardines del Bosque"></center><br>
        

        <div class="branch">
            <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.5228446020124!2d-100.90954962301512!3d20.19558328125348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cc3442e93fedf%3A0x40fac664cb7638c5!2sInstituto%20Tecnol%C3%B3gico%20Superior%20de%20Salvatierra!5e0!3m2!1ses-419!2smx!4v1717279173575!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>

            <div class="info">
                <h2>Sucursal Jardines del Bosque</h2>
                <p>Av Niños Héroes #2749, Jardines del Bosque, 44520, Guadalajara, Jal.</p>
                <p>Tel: 33 33451225</p>
                <p>Horario: Lunes a Viernes: 10:00am - 07:00pm, Sábados: 10:00am - 05:00pm</p>
    
              
            </div>
        </div>
        <!-- <div class="branch">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.481738716739!2d-103.35094968468723!3d20.672924686195866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1bf9c26fce7%3A0x3f4fdf8c11d1d0f8!2sDDTech!5e0!3m2!1ses!2smx!4v1687790736822!5m2!1ses!2smx" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="info">
                <h2>Sucursal Centro</h2>
                <p>Calle Santa Mónica #286, Zona Centro, 44100, Guadalajara, Jal.</p>
                <p>Tel: 33 33349594</p>
                <p>Horario: Lunes a Viernes: 10:00am - 07:00pm, Sábados: 10:00am - 05:00pm</p>
                <img src="https://via.placeholder.com/300" alt="Sucursal Centro">
            </div>
        </div> -->
    </div>
    <!--  -->
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