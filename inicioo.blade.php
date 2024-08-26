<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url('images/wallhaven-od1r79_1280x1024.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }

        .navbar {
            background-color: rgba(34, 139, 34, 0.85); /* Verde más intenso y opaco */
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar img {
            height: 50px;
        }

        .navbar .upp {
            font-weight: bold;
            font-size: 22px;
            color: #F0E68C; /* Color caqui */
        }

        .navbar button {
            background-color: #228B22;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 16px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .navbar button:hover {
            background-color: #006400;
            transform: scale(1.1);
        }

        .title {
            font-family: 'Pacifico', cursive;
            font-size: 80px;
            margin-left: 8%;
            margin-top: 100px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header {
            font-family: 'Courier New', Courier, monospace;
            font-size: 45px;
            margin-left: 8%;
            margin-top: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .box {
            background-color: rgba(34, 139, 34, 0.85); /* Verde bosque */
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            color: white;
            width: 400px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
            animation: fadeInRight 1s ease-out;
        }

        .box img {
            width: 250px;
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }

        .box a {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 25px;
            background-color: #F0E68C; /* Color caqui */
            color: #006400;
            font-weight: bold;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            text-align: center;
        }

        .box a:hover {
            background-color: #FFD700; /* Dorado */
            color: white;
            transform: scale(1.05);
        }

        /* Animación para la caja */
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Decoraciones adicionales */
        .leaf-icon {
            position: absolute;
            top: 10%;
            left: 5%;
            width: 150px;
            height: 150px;
            opacity: 0.2;
            transform: rotate(-45deg);
        }

        .leaf-icon.bottom {
            top: auto;
            bottom: 10%;
            left: auto;
            right: 5%;
            transform: rotate(45deg);
        }

        .leaf-icon img {
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right, rgba(0, 100, 0, 0.5), rgba(34, 139, 34, 0.3));
            z-index: -1;
            mix-blend-mode: multiply;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="images/png-transparent-leaf-logo-logo-room-icon-leaf-angle-grass-commercial-cleaning.png" alt="Logo"> <!-- Reemplaza con tu logo -->
        <div class="upp">UPP</div>
        <div>
            <a href="registroadm" class="btn btn-dark">Ingresar Admin</a>
        </div>
    </div>

    <div>
        <div class="title">SE PARTE</div>
        <div class="title">DEL CAMBIO</div>
        <div class="header">Por Una Universidad Ecológica</div>
    </div>

    <div class="box">
        <img src="images/images.jpeg" alt="Logo">
        <a href="iniciosesion">Iniciar Sesión</a>
        <a href="registro">Registrarse</a>
    </div>

    <div class="leaf-icon">
        <img src="images/leaf-icon.png" alt="Leaf Icon"> <!-- Reemplaza con tu icono -->
    </div>

    <div class="leaf-icon bottom">
        <img src="images/leaf-icon.png" alt="Leaf Icon"> <!-- Reemplaza con tu icono -->
    </div>

    <div class="overlay"></div>
</body>
</html>
