<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('images/wallhaven-47o819_1280x1024.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .cuadro-transparente {
            background-color: rgba(144, 238, 144, 0.6); /* Verde claro con 60% de opacidad */
            padding: 50px; /* Tamaño reducido del cuadro */
            border-radius: 10px; /* Bordes redondeados */
            width: 90%; /* Ancho del cuadro al 90% de la ventana */
            max-width: 600px; /* Máximo ancho para evitar que el cuadro sea demasiado grande en pantallas anchas */
            margin-top: 50px; /* Margen superior para ajustar la posición */
        }

        .texto-central h1 {
            color: black; /* Cambia el color del texto "Crear cuenta" a negro */
        }

        .texto-central {
            text-align: center;
            color: black; /* Cambia el color del texto dentro del cuadro a negro */
        }

        .campo-input {
            width: 100%;
            padding: 15px; /* Tamaño del campo de entrada */
            margin: 10px 0; /* Espacio alrededor del campo de entrada */
            box-sizing: border-box;
        }

        .boton-listo {
            background-color: black; /* Color de fondo del botón (negro) */
            color: white; /* Color del texto del botón (blanco) */
            padding: 15px; /* Tamaño del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="cuadro-transparente">
        <div class="texto-central">
            <h1>Crear cuenta</h1>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="campo-input">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" class="campo-input">

            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" class="campo-input">

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" class="campo-input">

            <button class="boton-listo" onclick="validarFormulario()">Listo</button>
        </div>
    </div>

    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var apellidos = document.getElementById("apellidos").value;
            var correo = document.getElementById("correo").value;
            var contrasena = document.getElementById("contrasena").value;

            if (nombre === "") {
                alert("Falta el nombre");
                return false;
            } else if (nombre.length > 30 || nombre.length < 2 || !/^[a-zA-Z]+$/.test(nombre)) {
                alert("El nombre debe tener entre 2 y 30 caracteres y solo contener letras.");
                return false;
            }

            if (apellidos === "") {
                alert("Falta el apellido");
                return false;
            } else if (apellidos.length > 30 || apellidos.length < 2 || !/^[a-zA-Z]+$/.test(apellidos)) {
                alert("El apellido debe tener entre 2 y 30 caracteres y solo contener letras.");
                return false;
            }

            var expresionR = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
            if (!expresionR.test(correo)) {
                alert("Ingrese una dirección de correo electrónico válida");
                return false;
            }

            if (contrasena === "") {
                alert("Falta la contraseña");
                return false;
            } else if (contrasena.length < 8 || contrasena.length > 12) {
                alert("La contraseña debe tener entre 8 y 12 caracteres");
                return false;
            } else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/.test(contrasena)) {
                alert("La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial(!@#$%^&*).");
                return false;
            }

            // Si todas las validaciones pasan, redirigir a otra vista
            window.location.href = "iniciosesion";
        }
    </script>
</body>
</html>
