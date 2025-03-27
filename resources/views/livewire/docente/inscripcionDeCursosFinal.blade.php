<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnológico Nacional de México</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/800px-Tecnologico_Nacional_de_Mexico.svg.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

        /* Estilos del encabezado */
        .header {
            background-color: #ffffff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header img {
            position: relative;
            left: 650px;
            width: 180px;
            height: auto;
        }

        /* Estilos del usuario */
        .user {
            display: flex;
            align-items: center;
        }

        .user span {
            margin-right: 15px;
            font-weight: bold;
        }

        .user button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 22px;
            color: #333;
            margin-left: 10px;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        .user button:hover {
            color: #007bff;
            transform: scale(1.1);
        }

        /* Estilos de la barra de navegación */
        .nav {
            background-color: #002855;
            color: white;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            gap: 30px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            padding: 0 15px;
            transition: color 0.3s ease;
        }

        .nav a:hover {
            color: rgb(133, 132, 132);
        }

        .nav a:not(:last-child) {
            border-right: 2px solid white;
            padding-right: 50px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .table th {
            background-color: #002855;
            color: white;
        }

        .btn-registrarse {
            position: relative;
            background-color: #002855;
            color: white;
            padding: 9px 12px;
            left: 730px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-registrarse:hover {
            background-color: #005272;
        }


        /* Estilos del pie de página */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #002855;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
            }

            .nav {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/800px-Tecnologico_Nacional_de_Mexico.svg.png"
            alt="Logo TecNM" />
        <div class="user">
            <span>Docente</span>
            <button class="user-btn"><i class="fas fa-user"></i></button>
            <button class="btn-notificaciones"><i class="fas fa-bell"></i></button>
        </div>
    </div>

    <div class="nav">
        <a href="{{ route('home') }}">INICIO</a>
        <a href="{{ route('docente.cursos') }}">CURSOS</a>
        <a href="{{ route('docente.constancias') }}">CONSTANCIAS</a>
        <a href="{{ route('docente.evaluaciones') }}">EVALUACIONES</a>
    </div>
    

    <div class="container">
        <h2>INFORMACIÓN DEL CURSO</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Curso</th>
                    <th>Nombre del Profesor</th>
                    <th>Descripción</th>
                    <th>Duración del Curso</th>
                    <th>Horas</th>
                    <th>Días</th>
                </tr>
            </thead>
            <tbody id="tabla-info-curso">
                <!-- Aquí se llenarán los datos dinámicamente -->
            </tbody>
        </table>
    </div>
        <!-- Botón de Registrarse -->
        <div class="registro-container">
            <button id="btn-registrarse" class="btn-registrarse">Registrarse</button>
        </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    // Obtener el parámetro de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const curso = urlParams.get("curso");

    if (curso) {
        fetch(`obtenerInfoCurso.php?curso=${encodeURIComponent(curso)}`)
            .then(response => response.json())
            .then(data => {
                let tabla = document.getElementById("tabla-info-curso");
                tabla.innerHTML = "";

                if (data.length > 0) {
                    data.forEach(curso => {
                        let fila = `<tr>
                            <td>${curso.cursosDados}</td>
                            <td>${curso.nombre_docente}</td>
                            <td>${curso.descripcion_servicio}</td>
                            <td>${curso.duracion_curso}</td>
                            <td>${curso.horario}</td>
                            <td>${curso.dias}</td>
                        </tr>`;
                        tabla.innerHTML += fila;
                    });
                } else {
                    tabla.innerHTML = "<tr><td colspan='6'>No hay información disponible</td></tr>";
                }
            })
            .catch(error => console.error("Error al obtener la información del curso:", error));
    } else {
        document.getElementById("tabla-info-curso").innerHTML = "<tr><td colspan='6'>No se especificó un curso</td></tr>";
    }
});

// Evento para el botón de Registrarse
document.getElementById("btn-registrarse").addEventListener("click", function () {
    alert("Registrado con éxito"); // Mensaje de éxito
    window.location.href = "pagePrincipalDocente.html"; // Cambia esto por la página a la que quieras redirigir
});

    </script>
    
    </body>
    </html>