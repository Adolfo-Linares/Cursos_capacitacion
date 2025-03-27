<?php
// Conexión a la base de datos
$host = "localhost"; // Cambia esto si tu BD está en otro servidor
$dbname = "cursos_capacitacion";
$user = "postgres";
$password = "22120681A";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Verificar si los datos fueron enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre_docente"]);
    $curp = trim($_POST["curp"]);
    $departamento = trim($_POST["departamento"]);
    $telefono = trim($_POST["telefono"]);
    $email = trim($_POST["email"]);

    // Validación básica
    if (empty($nombre) || empty($curp) || empty($departamento) || empty($email)) {
        die("Todos los campos obligatorios deben llenarse.");
    }

    // Insertar datos en la base de datos
    try {
        $sql = "INSERT INTO docentes (nombre, curp, departamento, telefono, email) 
                VALUES (:nombre, :curp, :departamento, :telefono, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nombre" => $nombre,
            ":curp" => $curp,
            ":departamento" => $departamento,
            ":telefono" => $telefono,
            ":email" => $email
        ]);

        echo "Registro exitoso. <a href='formulario.html'>Volver</a>";
    } catch (PDOException $e) {
        echo "Error al registrar: " . $e->getMessage();
    }
} else {
    echo "Acceso no válido.";
}
?>
