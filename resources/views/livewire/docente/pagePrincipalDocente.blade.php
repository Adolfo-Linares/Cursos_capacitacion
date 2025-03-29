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

        .banner {
            text-align: center;
            padding: 0;
            background-color: #D9D9D9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .credential {
    background-color: #002855;
    padding: 60px;
    top: 70px;
    text-align: center;
    width: 200px; /* Ancho reducido */
    border: 2px solid #002855;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    font-family: 'Roboto', sans-serif;
    position: relative;
    overflow: hidden;
    margin: 50px auto -340px 200px; /* Desplaza a la izquierda */
}

.credential::before {
    content: "";
    width: 120px;
    height: 6px;
    background-color: #bbb;
    position: absolute;
    top: 20px;
    left: 51%;
    transform: translateX(-50%);
    border-radius: 3px;
}

.credential-header {
    position: relative;
    top: 10px;
    width: 238px;
    left: -45px;
    background-color: #002855;
    padding: 25px;
    border-radius: 3px;
}

.credential img {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 4px solid #002855;
    margin-bottom: 12px;
}

.credential h2 {
    font-size: 22px;
    font-weight: bold;
    color: #ffffff;
    margin-bottom: 20px; /* Aumenta el espacio debajo del h2 */
}

.credential p {
    font-size: 16px;
    font-weight: bold;
    margin: 20px 20; /* Aumenta la separación entre párrafos */
    color: #ffffff;
}

.credential .role {
    font-size: 15px;
    color: #ffffff;
    font-weight: normal;
    letter-spacing: 1px;
    margin-top: 20px; /* Aumenta el espacio arriba de la clase role */
}


.credential-info {
    position: relative;
    background-color: #ffffff;
    top: -110px;
    left: 750px;
    padding: 50px; /* Reducido para evitar excesivo espacio */
    border-radius: 10px;
    height: 450px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px; /* Aumenté el ancho */
}

.credential-info h3 {
    margin: 10;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #002855;
}

.credential-info p {
    position: relative;
    left: 30px;
    top: 30px;
    margin: 20px 0; /* Mayor separación entre renglones */
    font-size: 18px; /* Tamaño de letra un poco más grande */
    color: #333;
}



.footer {
    background-color: #002855;
    position: relative;
    color: rgb(223, 221, 221);
    padding: 15px;
    font-size: 20px;
    text-align: left;
    line-height: 2; /* Aumenta el espacio entre líneas */
}

.footer p {
    margin-bottom: 20px; /* Aumenta la separación entre párrafos */
    font-weight: b; /* Hace las letras delgadas */
    font-family: Arial, sans-serif; /* O cualquier fuente que desees */
}

        .footer .campus, .footer .map {
            display: inline-block;
            vertical-align: top;
            width: 45%;
            margin: 10px;
        }
        .footer .map img {
            position: relative;
            left: 200px;
            width: 200px;
            height: auto;
        }
        .footer .social {
            position: relative;
            left: -430px;
            margin-top: 20px;
        }
        .footer .social a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 25px;
        }
        .footer .social a:hover {
            color: #ddd;
        }
        .footer .map iframe {
    position: relative;
    left: 60px; /* Mueve el mapa a la izquierda */


}
.footer p1 {
    font-size: 20px;  
    position: relative;
    left: 100px;
    color: #ffffff;  
    text-align: center;  
    margin-top: 100px;
    width: 100%;  /* Hace que ocupe todo el ancho disponible */
    white-space: nowrap; /* Evita que el texto se divida en varias líneas */
}




        .access-container {
            text-align: center;
            margin: 50px 0;
        }

        .access-container h2 {
            font-size: 28px;
            color: #002855;
            margin-bottom: 30px;
        }

        .access-buttons {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .access-buttons button {
            background-color: #002855;
            color: white;
            border: none;
            padding: 20px 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .access-buttons button:hover {
            background-color: #004aad;
            transform: scale(1.05);
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
    


    <div class="banner">
        <img alt="Instituto Tecnológico de Morelia 60 Aniversario banner" src="https://www.morelia.tecnm.mx/comunicacion/media/sliders/472036297_1021355656701064_3016517866415938058_n.jpg"/>
    </div>
        <!-- Selección de tipo de acceso -->
        <div class="access-container">
            <h2>Seleccione su tipo de acceso</h2>
            <div class="access-buttons">
                <button onclick="location.href='{{ route('docente.cursosRechazados') }}'">Cursos Rechazados</button>
                <button onclick="location.href='{{ route('docente.inscripcion') }}'">Inscribirse a un Curso</button>
                <button onclick="location.href='{{ route('altaDeCursos') }}'">Dar de alta un Curso</button>
            </div>
        </div>
    <div class="credential">
        <div class="credential-header">
            <img src="https://media.licdn.com/dms/image/v2/C4E03AQFsxGogcgL7IA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1544840838781?e=2147483647&v=beta&t=7tn4Io6crzZP2rwdukESNyUX6edXUexje_PWNinRE3M" alt="Foto">
            <h2>Efren de Jesus Pacheco Pimentel</h2>
            <p>Identificación: 123456</p>
            <p class="role">DOCENTE</p>
        </div>
    </div>
    
    <div class="credential-info">
        <h3>Información Personal</h3>
        <p><strong>Nombre:</strong> Efren de Jesus Pacheco Pimentel</p>
        <p><strong>Departamento:</strong> Ingeniería en Sistemas</p>
        <p><strong>Correo:</strong> pachecop@morelia.tecnm.mx</p>
        <p><strong>Identificador:</strong> 123456</p>
        <p><strong>Puesto:</strong> Docente</p>
    </div>
</div>

    
    <div class="footer">
        <div class="campus">
            <p><strong>Campus II</strong></p>
            <p>Avenida Tecnológico #1500, Col. Lomas de Santiaguito, Morelia, Mich. C.P. 58120</p>
            <p><strong>Campus II</strong></p>
            <p>Av. Tecnológico #1500, Col. Lomas de Santiaguito, Morelia, Mich. C.P. 58120</p>
            <p>Email: difusion@itmorelia.edu.mx </p>
            <p>Teléfono: +52 (443) 312 1570</p>
        
        </div>
        <div class="map">
            <div class="map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.392045448461!2d-101.1864507!3d19.700723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e4b1c9e8c1b%3A0x75db5f1e7e5bb5c2!2sInstituto%20Tecnol%C3%B3gico%20de%20Morelia!5e0!3m2!1ses!2smx!4v1712356789012" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            
            
            
        
        <div class="social">
            <a href="https://www.morelia.tecnm.mx/#/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/itmoficial?ref_src=twsrc%5Etfw" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/tecnm_itmorelia/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <div class="footer">
                <p1>&copy; 2024 Tecnológico Nacional de México. Todos los derechos reservados.</p1>
            </div>
            
</body>
</html>
