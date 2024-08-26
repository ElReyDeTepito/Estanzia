<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Administrador - Sensores de Humedad</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, rgba(34, 139, 34, 0.8), rgba(0, 100, 0, 0.8)), url('images/nature-background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        .header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.8);
        }

        .header h1 {
            font-size: 40px;
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
            letter-spacing: 2px;
        }

        .header p {
            font-size: 20px;
            margin-top: 10px;
            font-family: 'Georgia', serif;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 90%;
            max-width: 1000px;
        }

        .grid div {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .grid div:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .grid div img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
            z-index: -1;
        }

        .grid div span {
            font-size: 24px;
            font-weight: bold;
        }

        .grid div p {
            font-size: 18px;
            margin-top: 10px;
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 18px;
            box-shadow: 0px 0px 15px rgba(0, 100, 0, 0.8);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .back-button:hover {
            background-color: #388e3c;
            box-shadow: 0px 0px 25px rgba(0, 150, 0, 1);
        }

        /* Animación de aparición de la página */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            animation: fadeIn 2s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <div class="header">
            <h1>Bienvenido Administrador</h1>
            <p>Revisa los sensores de humedad</p>
        </div>

        <div class="grid">
            <div>
                <img src="images/area1.jpg" alt="Área 1">
                <span>Área 1</span>
            </div>
            <div>
                <img src="images/area2.jpg" alt="Área 2">
                <span>Área 2</span>
                <p>No autorizada</p>
            </div>
            <div>
                <img src="images/area3.jpg" alt="Área 3">
                <span>Área 3</span>
                <p>No autorizada</p>
            </div>
        </div>

        <a href="inicioo" class="back-button">REGRESAR</a>
    </div>
</body>
</html>
