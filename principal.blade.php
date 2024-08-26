<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas Verdes UPP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5dc; /* Color hueso */
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .navbar {
            background-color: rgba(34, 139, 34, 0.9); /* Verde más brillante */
            padding: 15px 25px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 0 0 20px 20px;
        }

        .navbar-brand {
            font-size: 2em;
            font-weight: bold;
            color: #f0e68c; /* Color caqui */
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.2em;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f0e68c !important; /* Color caqui al pasar el cursor */
        }

        .carousel {
            margin: 20px 0;
            height: 350px; /* Altura fija del carrusel */
            box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(80%);
            transition: transform 0.5s ease;
        }

        .carousel-item img:hover {
            transform: scale(1.05);
        }

        .carousel-control-prev, .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.3);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: flex-start;
            margin: 40px 0;
        }

        .area {
            padding: 25px;
            margin: 15px;
            border-radius: 20px;
            background: linear-gradient(145deg, #228b22, #32cd32);
            color: white;
            text-align: center;
            flex: 1 1 30%;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .area:hover {
            transform: scale(1.08);
            box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.4);
        }

        .area h2 {
            font-size: 1.7em;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .area p {
            font-size: 1.3em;
        }

        .not-authorized {
            background: linear-gradient(145deg, #8b4513, #a0522d); /* Degradado marrón oscuro */
        }

        .area-map {
            background-color: #e9f1e8;
            flex: 1 1 60%;
            position: relative;
            height: 450px; /* Altura del mapa */
            margin-left: 20px;
            border-radius: 20px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .area-map iframe {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            border: none;
        }

        .area-map h2 {
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 2em;
            font-weight: bold;
            color: #006400; /* Verde oscuro */
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .back-button {
            margin-top: 30px;
            padding: 15px 40px;
            background-color: #32cd32; /* Verde lima */
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.4em;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-button:hover {
            background-color: #228b22; /* Verde bosque */
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Áreas Verdes UPP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicioo">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sabias">Áreas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/wallhaven-968e58_1280x1024.png" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="images/wallhaven-0q8yz5_1280x1024.png" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="images/wallhaven-nmwpv9_1280x1024.png" alt="Imagen 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="content">
            <div class="area not-authorized">
                <h2>Área 3</h2>
                <p>No autorizada</p>
            </div>
            <div class="area not-authorized">
                <h2>Área 2</h2>
                <p>No autorizada</p>
            </div>
            <div class="area-map">
                <h2>Croquis de las Áreas Verdes UPP</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2674317152735!2d-122.08424908468159!3d37.42199977982557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb6a4290b72e1%3A0x9a63e72b92bbd9b8!2sGoogleplex!5e0!3m2!1ses!2ses!4v1614890261607!5m2!1ses!2ses" allowfullscreen></iframe>
            </div>
        </div>
        <a href="inicioo" class="back-button">REGRESAR</a>
    </div>


</body>
</html>
