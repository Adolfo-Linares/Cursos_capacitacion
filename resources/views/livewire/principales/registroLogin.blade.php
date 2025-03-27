

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
    </div>

    <div class="container">
        <div class="form-section">
            <h2>FORMULARIO DE REGISTRO</h2>

            <!-- FORMULARIO UNIFICADO -->
<form action="{{ route('docente.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <p style="text-align: center;">
        Instituto Tecnológico de Morelia.
    </p>

    <!-- PRIMERA SECCIÓN -->
    <fieldset style="border: 2px solid #0000005c; position:relative; top:20px; left:25px; padding: 20px; border-radius: 15px; width: 700px; background-color: #f9f9f9;">
        <legend style="font-weight: bold; padding: 5px 10px; border-radius: 10px; background-color: #fff; border: 1px solid #000;">
            Datos del Docente
        </legend>

        <div style="display: flex; flex-direction: column; gap: 10px;">
            <label for="nombre-docente">Docente:</label>
            <input type="text" name="nombre_docente" id="nombre-docente" required
            style="position: relative; width: 73.5%; float: right; left: 150px;">

            <label for="curp">CURP:</label>
            <input type="text" name="curp" id="curp" maxlength="18" pattern="[A-Z0-9]{18}" required
            style="position: relative; width: 73.5%; float: right; left: 150px;">

            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" id="departamento" required
            style="position: relative; width: 73.5%; float: right; left: 150px;">

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" maxlength="10" pattern="\d{10}" inputmode="numeric" required
            style="position: relative; width: 73.5%; float: right; left: 150px;">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required
            style="position: relative; width: 73.5%; float: right; left: 150px;">
        </div>
    </fieldset>

    <div class="finalize-button" style="margin-top: 40px; text-align: center;">
        <button type="submit" 
        style="padding: 10px 20px; font-size: 16px; border-radius: 5px; background-color: #003366; color: white; border: none; cursor: pointer;">
        Registrarse
        </button>
    </div>
</form>
 </div>
    </div>
</body>

