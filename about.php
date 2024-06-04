<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Venta de Computadoras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.png" alt="Logo" class="tamaño">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Nosotros</a>
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

      body {
          font-family: Arial, sans-serif;
          background-color: #1c1c1c;
          color: #fff;
          margin: 0;
          padding: 0;
      }

      .container {
          max-width: 1000px;
          margin: 0 auto;
          padding: 20px;
      }

      .header {
          text-align: center;
          margin-bottom: 20px;
      }

      .header img {
          width: 100%;
          max-width: 800px;
          border-radius: 10px;
      }

      .content h1 {
          text-align: center;
          font-size: 24px;
          margin-top: 20px;
      }

      .content p {
          text-align: center;
          margin-bottom: 20px;
      }

      .section {
          margin-bottom: 40px;
      }

      .section h2 {
          font-size: 20px;
          margin-bottom: 10px;
          text-align: center;
      }

      .values {
          margin: 0 20px;
      }

      .values li {
          margin-bottom: 10px;
      }

      .tamaño1 {
          height: auto;
          width: 100%;
          max-width: 150px;
      }

      .tamaño {
          width: auto;
          max-width: 50px;
      }

      @media (max-width: 768px) {
          .carousel-caption h5 {
              font-size: 2rem;
          }

          .parallax, .parallaxabout {
              height: 30vh;
          }

          .parallax h1, .parallaxabout h1 {
              font-size: 2em;
          }

          .section h2 {
              font-size: 18px;
          }

          .values li {
              font-size: 14px;
          }

          .tamaño1 {
              max-width: 100px;
          }

          .tamaño {
              max-width: 30px;
          }
      }
    </style>

    <!-- Main Content -->
    <div class="container-fluid mt-5 pt-5">
        <!-- Sección con efecto parallax -->
        <section class="parallaxabout">
        </section>
        <div id="about" class="section-bg text-center">
            <h1 class="section-title">Quiénes somos</h1>
            <p>Trabajamos para mejorar la movilidad en el mundo</p>
            <p>Movilizamos el mundo, esa es la mejor manera de decirlo. En nuestra esencia. Creamos oportunidades al poner el mundo en movimiento. Las oportunidades llegan a la gente que puede moverse. En nuestra esencia. Creamos oportunidades al poner el mundo en movimiento. Las oportunidades llegan a la gente que puede moverse.</p>
            <a href="#" class="btn btn-custom">Consulta nuestra declaración de misión completa</a>
        </div>
        
        <!-- Sección con efecto parallax -->
   
         <div class="container">
        <div class="header">
            <img src="img/Logo.png" alt="DD Tech" class="tamaño1">
        </div>
        <div class="content">
            <h1>PcBuild</h1>
            <p>DD Tech surge para atender las crecientes necesidades mostradas por el mercado de consumidores de electrónicos y cómputo con la idea de satisfacerlas de una forma eficaz, ágil y con precios accesibles, además somos uno de los más grandes vendedores en la plataforma Mercado Libre (distinguidos con el nombramiento de mercadolíder platinum, categoría que se le otorga sólo a vendedores miembros de la comunidad que gozan de una reputación impecable).</p>
            <p>Actualmente contamos con una oficina central y una sucursal ubicada en la zona centro de la ciudad de Guadalajara, Jalisco, desde sus inicios nos propusimos ser una empresa que crease una conexión más directa entre sus clientes y personal, que los guiará a realizar una buena compra.</p>
            <p>Más de 7 años brindando atención, servicio, calidad e innovación.</p>
        </div>
        <div class="section">
            <h2>Objetivo general</h2>
            <p>Nuestro objetivo general es satisfacer de manera eficaz las necesidades del mercado, buscando la mejora continua en los servicios de la empresa.</p>
        </div>
        <div class="section">
            <h2>Misión</h2>
            <p>Ser el aliado estratégico de nuestros clientes, guiándolos a una compra inteligente.</p>
            <p>Ser el mejor proveedor de tecnología y servicio online para un mercado en constante cambio.</p>
        </div>
        <div class="section">
            <h2>Valores</h2>
            <ul class="values">
                <li><strong>1. Integridad:</strong> Estamos expresamente comprometidos a que todas nuestras transacciones de negocios se realicen con integridad, honestidad y siguiendo normas éticas de conducta.</li>
                <li><strong>2. Receptividad:</strong> Como una organización, reconocemos la importancia de ser receptivos a las necesidades de todos aquellos con los cuales hacemos negocios, independiente de su ubicación.</li>
                <li><strong>3. Respeto:</strong> A las ideas y diferencias individuales y culturales.</li>
                <li><strong>4. Trabajo en equipo:</strong> DD Tech considera de gran valor el trabajo en equipo entre sus departamentos. Este espíritu debe prevalecer en toda actividad, incluyendo las relaciones con los clientes.</li>
                <li><strong>5. Servicio al cliente:</strong> DD Tech considera de vital importancia ofrecer excelencia en el servicio, proporcionando a nuestros clientes "lo que el cliente necesita, en donde lo necesita y cuando lo necesita".</li>
                <li><strong>6. Responsabilidad:</strong> Estamos comprometidos en ser un socio de negocios que siempre cumpla con lo prometido.</li>
            </ul>
        </div>
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