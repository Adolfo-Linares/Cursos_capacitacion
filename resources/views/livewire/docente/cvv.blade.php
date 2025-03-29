

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
            <h2>FORMULARIO CVV</h2>

            <form action="{{ route('cvv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p style="text-align: center;">Instituto Tecnológico de Morelia.</p>
            
                <!-- PRIMERA SECCIÓN -->
                <fieldset style="border: 2px solid #0000005c; position:relative; top:20px; left:25px; padding: 20px; border-radius: 15px; width: 700px; background-color: #f9f9f9;">
                    <legend style="font-weight: bold; padding: 5px 10px; border-radius: 10px; background-color: #fff; border: 1px solid #000;">Datos del Docente</legend>
                
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="nombre_docente">Docente:</label>
                        <input type="text" name="nombre_docente" id="nombre_docente" style="width: 520px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="curp">CURP:</label>
                        <input type="text" name="curp" id="curp" maxlength="18" pattern="[A-Z0-9]{18}" required style="width: 520px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="departamento">Departamento:</label>
                        <input type="text" name="departamento" id="departamento" style="width: 520px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" maxlength="10" pattern="\d{10}" inputmode="numeric" required style="width: 520px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" style="width: 520px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>
                </fieldset>
            
                <!-- SEGUNDA SECCIÓN -->
                <fieldset style="border: 2px solid #0000005c; position:relative; left:25px; padding: 20px; top:40px; border-radius: 15px; width: 700px; background-color: #f9f9f9;">
                    <legend style="font-weight: bold; padding: 5px 10px; border-radius: 10px; background-color: #fff; border: 1px solid #000;">Formación Académica</legend>
                    
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="formacion_academica">Formación Académica:</label>
                        <input type="text" name="formacion_academica" id="formacion_academica" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="nivel_estudios">Nivel de Estudios:</label>
                        <input type="text" name="nivel_estudios" id="nivel_estudios" required style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="institucion_academica">Institución:</label>
                        <input type="text" name="institucion_academica" id="institucion_academica" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="ano_graduacion">Año de Graduación:</label>
                        <input type="text" name="ano_graduacion" id="ano_graduacion" maxlength="4" pattern="\d{4}" required style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>
                </fieldset>
            
                <!-- TERCERA SECCIÓN -->
                <fieldset style="border: 2px solid #0000005c; position:relative; left:25px; top:60px; padding: 20px; border-radius: 15px; width: 700px; background-color: #f9f9f9;">
                    <legend style="font-weight: bold; padding: 5px 10px; border-radius: 10px; background-color: #fff; border: 1px solid #000;">Experiencia Docente</legend>
                
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="institucion_docente">Institución:</label>
                        <input type="text" name="institucion_docente" id="institucion_docente" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="materias_impartidas">Materias Impartidas:</label>
                        <input type="text" name="materias_impartidas" id="materias_impartidas" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="anos_experiencia">Años de Experiencia:</label>
                        <input type="text" name="anos_experiencia" id="anos_experiencia" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>
                </fieldset>
            
                <!-- CUARTA SECCIÓN -->
                <fieldset style="border: 2px solid #0000005c; position:relative; left:25px; top:80px; padding: 20px; border-radius: 15px; width: 700px; background-color: #f9f9f9;">
                    <legend style="font-weight: bold; padding: 5px 10px; border-radius: 10px; background-color: #fff; border: 1px solid #000;">Habilidades y Certificaciones</legend>
                
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <label for="habilidades">Habilidades:</label>
                        <input type="text" name="habilidades" id="habilidades" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                        
                        <label for="certificaciones">Certificaciones:</label>
                        <input type="text" name="certificaciones" id="certificaciones" style="width: 470px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>
                </fieldset>
            
                <button type="submit" style="margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">Guardar</button>
            </form>
            
    
    


    <div class="finalize-button" style="margin-top: 120px; text-align: center;">
        <button type="submit" style="padding: 10px 20px; font-size: 16px; border-radius: 5px; background-color: #003366; color: white; border: none; cursor: pointer;">
            Finalizar
        </button>
    </div>
    
</form>

<div class="footer"></div>

</body>
  