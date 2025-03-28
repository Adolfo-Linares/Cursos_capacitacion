<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos del fondo con degradado */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            /* Ocultar el scroll */
            background: linear-gradient(45deg, #002855, #002855);
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 600px;
            /* Aumentar el ancho máximo */
            padding: 20px;
            /* Reducir padding para evitar scroll */
        }

        .login-box {
            background: #fff;
            padding: 20px 30px;
            /* Reducir espacio interno */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(146, 131, 225, 0.3);
            text-align: center;
            max-height: calc(100vh - 40px);
            /* Asegúrate de que no supere la altura de la pantalla */
            overflow: auto;
            /* Permitir scroll solo dentro de esta caja si es necesario */
        }

        .login-image {
            position: relative;
            top: 10px;
            width: 350px;
            /* Reducir ancho de la imagen */
            height: 100px;
            /* Reducir alto de la imagen */
            left: -2%;
            margin-bottom: 20px;
            /* Aumentar espacio inferior */
        }

        /* Estilo para el encabezado */
        h2 {
            position: relative;
            top: -10px;
            margin-left: 40px;
            /* Mueve el texto más a la derecha */
            font-size: 40px;
            /* Aumentar tamaño de fuente */
        }

        /* Estilos de los campos de entrada y etiquetas */
        .input-group {
            position: relative;
            margin-bottom: 20px;
            /* Aumentar margen inferior */
            display: flex;
            align-items: center;
        }

        .input-icon {
            width: 40px;
            /* Aumentar tamaño del icono */
            height: 40px;
            /* Aumentar tamaño del icono */
            margin-right: 15px;
            /* Aumentar espacio entre icono y campo de entrada */
        }

        input {
            padding-left: 15px;
            /* Mantener espacio para el texto */
            width: 90%;
            padding: 15px;
            /* Mantener padding interno */
            font-size: 18px;
            /* Mantener tamaño de fuente */
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: transparent;
            color: #333;
            outline: none;
        }

        input:focus {
            border-color: #002855;
        }

        label {
            position: absolute;
            top: 50%;
            left: 15%;
            /* Ajustar más a la izquierda */
            transform: translateY(-50%);
            background: #fff;
            padding: 0 5px;
            color: hwb(0 67% 33%);
            font-size: 18px;
            /* Aumentar tamaño de fuente */
            pointer-events: none;
            transition: 0.3s;
        }

        input:focus+label,
        input:not(:placeholder-shown)+label {
            top: -5px;
            /* Ajustar para más separación */
            font-size: 14px;
            /* Aumentar tamaño de fuente */
            color: #002855;
        }

        .show-password {
            position: absolute;
            left: 90%;
            /* Cambiado para más separación */
            top: 50%;
            transform: translateY(-50%);
            background-color: rgb(255, 255, 255);
            border: none;
            border-radius: 50%;
            color: #fff;
            width: 30px;
            /* Reducir tamaño del botón */
            height: 30px;
            /* Reducir tamaño del botón */
            font-size: 18px;
            /* Reducir tamaño de fuente */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Botón de ingreso */
        button {
            position: relative;
            left: 3%;
            width: 60%;
            padding: 10px;
            /* Reducir padding */
            font-size: 16px;
            /* Reducir tamaño de fuente */
            background-color: rgb(31, 60, 115);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #002855;
        }

        /* Estilo del mensaje de error */
        #error-message {
            position: relative;
            color: red;
            left: -0%;
            display: none;
            /* Oculto por defecto */
            margin-top: 20px;
            /* Reducir margen superior */
            white-space: nowrap;
            /* Evita el salto de línea */
        }

        /* Adaptabilidad */
        @media (max-width: 600px) {
            .login-box {
                padding: 20px 30px;
                /* Reducir espacio en pantallas más pequeñas */
            }

            .login-image {
                width: 80px;
                height: 80px;
            }
        }
    </style>

</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/800px-Tecnologico_Nacional_de_Mexico.svg.png" alt="Logo" class="login-image">
            <h2>Bienvenido</h2>
            <form id="loginForm">
           <!-- Agrega un ID al formulario -->
<form id="loginForm">
    <!-- Campo Usuario -->
    <div class="input-group">
        <img src="https://img.icons8.com/ios/50/user--v1.png" class="input-icon" alt="Usuario">
        <input type="email" id="email" placeholder=" " required>
        <label for="email">Correo Electrónico</label>
    </div>

    <!-- Campo Contraseña -->
    <div class="input-group">
        <img src="https://img.icons8.com/ios/50/lock--v1.png" class="input-icon" alt="Contraseña">
        <input type="password" id="password" placeholder=" " required>
        <label for="password">Contraseña</label>
        <button type="button" class="show-password" onclick="togglePassword()">👁️</button>
    </div>

    <!-- Mensaje de error -->
    <p id="error-message" style="color: red; display: none;"></p>

    <!-- Botón de inicio de sesión -->
    <div class="button-group">
        <button type="submit" class="login-btn">Iniciar Sesión</button>
                            <button type="button" class="register-btn" onclick="location.href='{{ route('registro') }}'">Registrarse</button>

    </div>
</form>

<script>
    document.getElementById("loginForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar el envío tradicional del formulario

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var errorMessage = document.getElementById("error-message");

        fetch('/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ email: email, password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirigir a la URL proporcionada por el backend
                window.location.href = data.redirect;
            } else {
                // Mostrar mensaje de error
                errorMessage.textContent = data.message;
                errorMessage.style.display = "block";
            }
        })
        .catch(error => {
            console.error("Error en la autenticación:", error);
        });
    });

    // Función para mostrar/ocultar la contraseña
    function togglePassword() {
        var passwordField = document.getElementById("password");
        passwordField.type = (passwordField.type === "password") ? "text" : "password";
    }
</script>


    <style>
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .login-btn, .register-btn {
            width: 48%;
            padding: 10px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .login-btn {
            background-color: #4CAF50;
            color: white;
        }

        .register-btn {
            background-color: #007BFF;
            color: white;
        }

        .login-btn:hover {
            background-color: #45a049;
        }

        .register-btn:hover {
            background-color: #0056b3;
        }
    </style>
</body>
