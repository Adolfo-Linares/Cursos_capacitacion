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

        .curso-container {
            position: relative;
            left: 350px;
            width: 800px;
            /* Ampliado para mayor espacio */
            background: white;
            padding: 30px;
            /* Espaciado mayor */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            /* Sombra más pronunciada */
        }

        /* Estilos del encabezado del curso */
        .curso-header {
            background: #002855;
            color: white;
            text-align: center;
            padding: 15px;
            /* Espaciado mayor */
            font-size: 20px;
            /* Texto más grande */
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }

        /* Información del curso */
        .curso-info {
            padding: 20px;
            /* Mayor espaciado */
            border: 2px solid #ccc;
            /* Borde más grueso */
            border-radius: 8px;
            background: #fff;
            font-size: 18px;
            /* Aumentado para mejor legibilidad */
        }

        .curso-info p {
            margin: 12px 0;
            /* Mayor separación entre párrafos */
        }

        /* Estilos para la descripción del curso */
        .descripcion {
            font-weight: bold;
            font-size: 18px;
            /* Aumentado para resaltar */
        }

        /* Contenedor de botones */
        .botones {
            display: flex;
            justify-content: space-around;
            /* Espaciado uniforme */
            margin-top: 30px;
            /* Más separación del contenido */
        }

        /* Estilos generales para los botones */
        .boton {
            padding: 15px 20px;
            /* Botones más grandes */
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            /* Texto más grande */
            color: white;
            transition: 0.3s ease-in-out;
        }

        /* Colores específicos de cada botón */
        .aprobar {
            background: #28a745;
        }

        .rechazar {
            background: #dc3545;
        }

        .sugerir {
            background: #ffc107;
            color: black;
        }

        .salir {
            background: #6c757d;
        }

        /* Efecto al pasar el cursor */
        .boton:hover {
            opacity: 0.8;
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
        .modal {
    display: none; /* Oculto por defecto */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-contenido {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 15px;
    width: 350px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    animation: aparecer 0.3s ease-in-out;
}

@keyframes aparecer {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

.modal-contenido textarea {
    position: relative;
    width: 100%;
    left: -12px;
    margin-top: 15px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    resize: none;
    transition: border-color 0.2s;
}

.modal-contenido textarea:focus {
    border-color: #28a745;
    outline: none;
}

.modal-botones {
    margin-top: 20px;
}

.modal-botones button {
    margin: 5px;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.2s;
}

.modal-botones button:first-child {
    background-color: #28a745;
    color: white;
}

.modal-botones button:last-child {
    background-color: #dc3545;
    color: white;
}

.modal-botones button:hover {
    transform: scale(1.05);
    opacity: 0.9;
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
            <span>CRC</span>
            <button class="user-btn"><i class="fas fa-user"></i></button>
            <button class="btn-notificaciones"><i class="fas fa-bell"></i></button>
        </div>
    </div>

    <div class="nav">
        <a href="{{ route('home') }}">INICIO</a>
        <a href="{{ route('desarrollo.crc') }}">CURSOS</a>
    </div>
    
    <div class="curso-container">
        <div class="curso-header">FUNDAMENTOS DE ZABBIX</div>
        <div class="curso-info">
            <p><strong>Profesor que imparte el curso:</strong> Efren de Jesus Pacheco Pimenton</p>
            <p><strong>Área de Especialidad:</strong> Seguridad</p>
            <p><strong>Departamento:</strong> Sistemas Computacionales</p>
            <p class="descripcion"><strong>Descripción:</strong> <span>Aprende a monitorear infraestructuras de TI con
                    ZABBIX...</span></p>
        </div>
        <div class="botones">
            <button class="boton aprobar" onclick="location.href='aprobado.html'">✔ APROBAR</button>
            <button class="boton rechazar" onclick="location.href='rechazado.html'">✖ RECHAZAR</button>
            <button class="boton sugerir" onclick="mostrarCuadroSugerencias()">⚡ SUGERIR CAMBIOS</button>
            <button class="boton salir" onclick="location.href='publicacionDeCursosCRC'">➜ SALIR</button>
        </div>        
    </div>

    <!-- Cuadro de sugerencias oculto inicialmente -->
<div id="cuadroSugerencias" class="modal">
    <div class="modal-contenido">
        <h3>Agregar Sugerencias</h3>
        <textarea id="textoSugerencia" rows="5" placeholder="Escribe tus sugerencias aquí..."></textarea>
        <div class="modal-botones">
            <button onclick="guardarSugerencia()">Guardar</button>
            <button onclick="cerrarCuadroSugerencias()">Cancelar</button>
        </div>
    </div>
</div>

    <div class="footer"></div>
</body>

<script>
    function mostrarCuadroSugerencias() {
        document.getElementById('cuadroSugerencias').style.display = 'flex';
    }
    
    function cerrarCuadroSugerencias() {
        document.getElementById('cuadroSugerencias').style.display = 'none';
    }
    
    function guardarSugerencia() {
        const texto = document.getElementById('textoSugerencia').value;
        if (texto.trim() === '') {
            alert('Por favor, escribe una sugerencia antes de guardar.');
            return;
        }
    
        // Aquí puedes guardar las sugerencias como desees
        // Por ejemplo, en localStorage o enviarlas a un servidor
    
        alert('Sugerencia guardada: ' + texto);
    
        // Limpiar y cerrar el cuadro
        document.getElementById('textoSugerencia').value = '';
        cerrarCuadroSugerencias();
    }    
</script>

</html>