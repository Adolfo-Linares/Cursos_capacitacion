

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
            position: relative;
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
            margin-top: 20px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            height: auto;
        }

        .form-section {
            width: 100%;
            margin-bottom: 20px;
        }

        .form-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-section label {
            position: relative;
            top: 30px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-section input,
        .form-section textarea {
            margin-bottom: 15px;
            padding: 10px;
            left: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .form-section textarea {
            resize: vertical;
        }

        .form-section .signature {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-section .signature div {
            text-align: center;
            width: 45%;
        }

        .form-section .signature div p {
            margin-top: 40px;
            border-top: 1px solid #000;
            padding-top: 5px;
        }

        .form-section .finalize-button {
            display: flex;
            justify-content: flex-end;
        }

        .form-section .finalize-button button {
            padding: 10px 20px;
            background-color: #003366;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-section .finalize-button button:hover {
            background-color: #005272;
        }

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
        <div class="form-section">
            <h2>ALTA DE CURSOS</h2>

            <!-- FORMULARIO UNIFICADO AQUÍ -->
            <form action="altaDeCursos.php" method="POST">
                <p style="text-align: center; font-weight: bold;">
                    FICHA TÉCNICA DEL SERVICIO DE ACTUALIZACION PROFESIONAL Y FORMACIÓN DOCENTE<br>
                </p>
                <p style="text-align: center;">
                    Instituto Tecnológico o Centro o Unidad: Instituto Tecnológico de Morelia.
                </p>

                <!-- PRIMERA SECCIÓN -->
                <label for="nombre-servicio">Nombre del Curso:</label>
                <input type="text" name="nombre-servicio" id="nombre-servicio"
                    style="position: relative; width: 73.5%; float: right; left: 180px;">
                    <label for="duracion-curso">Objetivo General:</label>
                    <input type="text" name="duracion-curso" id="duracion-curso"
                        style="position: relative; width: 64%; float: right; left: 258px;">
                        <label for="duracion-curso">Duración en horas del curso:</label>
                        <input type="text" name="duracion-curso" id="duracion-curso"
                            style="position: relative; width: 64%; float: right; left: 258px;">
                            <label for="duracion-curso">Horario:</label>
                            <input type="text" name="duracion-curso" id="duracion-curso"
                                style="position: relative; width: 64%; float: right; left: 258px;">
                                <label for="duracion-curso">Días:</label>
                                <input type="text" name="duracion-curso" id="duracion-curso"
                                    style="position: relative; width: 64%; float: right; left: 258px;">
              
                <!-- SEGUNDA SECCIÓN -->
               
                <h2>DATOS DEL DOCENTE</h2>

                                <label for="nombre-docente">Docente:</label>
                                <input type="text" name="nombre_docente" id="nombre-docente" style="position: relative; width: 73.5%; float: right; left: 180px;">
                                
                                <label for="curp">RFC:</label>
                                <input type="text" name="curp" id="curp" maxlength="18" pattern="[A-Z0-9]{18}" style="position: relative; width: 73.5%; float: right; left: 180px;" required>
                                
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="departamento" id="departamento" style="position: relative; width: 73.5%; float: right; left: 180px;">
                                
                                <label for="telefono">Teléfono:</label>
                                <input type="text" name="telefono" id="telefono" maxlength="10" pattern="\d{10}" inputmode="numeric" style="position: relative; width: 73.5%; float: right; left: 180px;" required>
                                
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" style="position: relative; width: 73.5%; float: right; left: 180px;">
                                
                             
  <!-- Firmas y botón -->
<div class="signature">
    <div>
        <img id="firmaFacilitador" class="firma-imagen" alt="Firma del Facilitador">
        <input type="text" placeholder="Nombre del Facilitador" class="nombre-input">
        <p>Nombre y Firma del Facilitador(a).</p>
        <input type="file" accept="image/*" onchange="mostrarFirma(event, 'firmaFacilitador')">
    </div>
    <div>
        <img id="firmaJefe" class="firma-imagen" alt="Firma del Jefe de Desarrollo Académico">
        <input type="text" placeholder="Nombre del Jefe de Desarrollo Académico" class="nombre-input">
        <p>Nombre y Firma del Jefe(a) de Desarrollo Académico.</p>
        <input type="file" accept="image/*" onchange="mostrarFirma(event, 'firmaJefe')">
    </div>
</div>
<div class="finalize-button">
    <button onclick="window.location.href='{{ route('cvv') }}'">Siguiente</button>
</div>



<!-- Estilos -->
<style>
    .signature {
        display: flex;
        justify-content: space-around;
        margin: 20px 0;
    }
    .signature div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .firma-imagen {
        max-width: 250px;
        max-height: 100px;
        display: none;
        margin-bottom: 5px;
    }
    .nombre-input {
    margin-bottom: 2px;
    padding: 5px;
    width: 90%;
    text-align: center;
    border: 2px solid rgb(255, 255, 255); /* Contorno rojo */
    outline: none; /* Evitar borde extra al hacer clic */
    font-size: 16px;
    background-color: #ffffff; /* Color de fondo opcional */
    border-radius: 5px; /* Bordes redondeados opcionales */
}

</style>

<!-- Script -->
<script>
    function mostrarFirma(event, id) {
        const input = event.target;
        const imagen = document.getElementById(id);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagen.src = e.target.result;
                imagen.style.display = "block";
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
