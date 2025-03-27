<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnológico Nacional de México</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/800px-Tecnologico_Nacional_de_Mexico.svg.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

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
            padding: 0 15px;
            transition: color 0.3s ease;
        }

        .nav a:not(:last-child) {
            border-right: 2px solid white;
            padding-right: 50px;
        }

        .nav a:hover {
            color: rgb(133, 132, 132);
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #002855;
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

        .btn-descargar {
            background-color: #002855;
            color: white;
            padding: 9px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-descargar:hover {
            background-color: #005272;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1024px) {

            .header,
            .nav {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .header img {
                width: 120px;
            }

            .footer {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/800px-Tecnologico_Nacional_de_Mexico.svg.png"
            alt="Tecnológico Nacional de México logo" />
        <div class="user">
            <span>Docente</span>
            <button class="user-btn">
                <i class="fas fa-user"></i>
            </button>
            <button class="btn-notificaciones">
                <i class="fa-solid fa-bell"></i>
            </button>
        </div>
    </div>

    <div class="nav">
        <a href="{{ route('docente.principal') }}">INICIO</a>
        <a href="{{ route('docente.cursos') }}">CURSOS</a>
        <a href="{{ route('docente.constancias') }}">CONSTANCIAS</a>
        <a href="{{ route('docente.evaluaciones') }}">EVALUACIONES</a>
    </div>
    

    <div class="container">
        <h2>INSCRIPCIÓN DE CURSOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Profesor</th>
                    <th>Nombre del Curso</th>
                    <th>Informacion</th>
                </tr>
            </thead>
            <tbody id="tabla-cursos">
                <!-- Aquí se llenarán los datos dinámicamente -->
            </tbody>
        </table>
    </div>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch("inscripcionDeCursos.php") // Llama al script PHP que obtiene los datos
            .then(response => response.json()) // Convierte la respuesta en JSON
            .then(data => {
                let tabla = document.getElementById("tabla-cursos");
                tabla.innerHTML = ""; // Limpia la tabla antes de insertar datos
    
                if (data.length > 0) {
                    data.forEach(docente => {
                        let fila = `<tr>
                            <td>${docente.nombre_docente}</td>
                            <td>${docente.cursosDados}</td>
                            <td><button class="btn-descargar" onclick="inscribirse('${docente.cursosDados}')">Informacion</button></td>
                        </tr>`;
                        tabla.innerHTML += fila;
                    });
                } else {
                    tabla.innerHTML = "<tr><td colspan='3'>No hay cursos disponibles</td></tr>";
                }
            })
            .catch(error => console.error("Error al obtener los cursos:", error));
    });
    
    function inscribirse(curso) {
    window.location.href = `inscripcionDeCursosFinal.html?curso=${encodeURIComponent(curso)}`;
}

    </script>
    
    <div class="footer"></div>

    <script>
        function descargarConstancia(archivo) {
            window.location.href = archivo;
        }
    </script>
</body>

</html>