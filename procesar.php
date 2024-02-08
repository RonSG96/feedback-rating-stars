<?php
// Parámetros de conexión a la base de datos
$host = 'localhost';
$dbname = 'encuestadermasoft';
$username = 'root';
$password = '';

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario
$email = $_POST['email'];
$experiencia_compra = $_POST['experience'] ?? null; // Usando el operador de fusión de null
$experiencia_comentario = $_POST['experience_comment'];
$soporte = $_POST['support'] ?? null;
$soporte_comentario = $_POST['support_comment'];
$productos = $_POST['products'] ?? null;
$productos_comentario = $_POST['products_comment'];
$sugerencias = $_POST['suggestions'];

// Preparar la consulta SQL
$stmt = $conn->prepare("INSERT INTO respuestas (email, experiencia_compra, experiencia_comentario, soporte, soporte_comentario, productos, productos_comentario, sugerencias) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("siississ", $email, $experiencia_compra, $experiencia_comentario, $soporte, $soporte_comentario, $productos, $productos_comentario, $sugerencias);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro guardado con éxito";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>