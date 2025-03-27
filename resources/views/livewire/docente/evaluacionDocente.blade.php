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
            background-color: white;
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        .profile {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .profile img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }

        .question {
            margin-bottom: 15px;
        }

        .question label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .question select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilos del botón de enviar */
        .submit-btn {
            display: inline-block;
            background-color: #002855;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 15px;
        }

        .submit-btn:hover {
            background-color: #005272;
            transform: scale(1.05);
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
        <a href="{{ route('docente.principal') }}">INICIO</a>
        <a href="{{ route('docente.cursos') }}">CURSOS</a>
        <a href="{{ route('docente.constancias') }}">CONSTANCIAS</a>
        <a href="{{ route('docente.evaluaciones') }}">EVALUACIONES</a>
    </div>
    <div class="container">
        <h2>EVALUACIÓN DOCENTE</h2>
        <div class="profile">
            <img src="https://media.licdn.com/dms/image/v2/C4E03AQFsxGogcgL7IA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1544840838781?e=2147483647&v=beta&t=7tn4Io6crzZP2rwdukESNyUX6edXUexje_PWNinRE3M"
                alt="Foto">
            <span>"Efren Pacheco de Jesus" - "Conmutacion y enrutamiento"</span>
        </div>
        <div class="question">
            <label>Explica de manera clara los contenidos de la asignatura.</label>
            <select>
                <option value="">Seleccione</option>
                <option value="1">1 - 😡 Muy mal</option>
                <option value="2">2 - 😟 Mal</option>
                <option value="3">3 - 😐 Regular</option>
                <option value="4">4 - 🙂 Bueno</option>
                <option value="5">5 - 😃 Excelente</option>
            </select>
        </div>

        <div class="question">
            <label>Relaciona los contenidos de la asignatura con los contenidos de otras.</label>
            <select>
                <option value="">Seleccione</option>
                <option value="1">1 - 😡 Muy mal</option>
                <option value="2">2 - 😟 Mal</option>
                <option value="3">3 - 😐 Regular</option>
                <option value="4">4 - 🙂 Bueno</option>
                <option value="5">5 - 😃 Excelente</option>
            </select>
        </div>

        <div class="question">
            <label>Enseña todo el temario del curso.</label>
            <select>
                <option value="">Seleccione</option>
                <option value="1">1 - 😡 Muy mal</option>
                <option value="2">2 - 😟 Mal</option>
                <option value="3">3 - 😐 Regular</option>
                <option value="4">4 - 🙂 Bueno</option>
                <option value="5">5 - 😃 Excelente</option>
            </select>
        </div>

        <!-- Botón de enviar -->
        <button class="submit-btn">Enviar</button>
    </div>
    </div>

    <div class="footer"></div>
</body>

</html>