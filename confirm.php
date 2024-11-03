<?php
// Conectar a la base de datos
$host = 'localhost';
$dbname = 'pruebas';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Obtener el token de la URL
$token = $_GET['token'];

// Confirmar la cuenta
$sql = "UPDATE usuarios SET confirmado = 1 WHERE token = :token";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':token', $token);

if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        echo "Cuenta confirmada con éxito. Ahora puedes iniciar sesión.";
    } else {
        echo "Token inválido o cuenta ya confirmada.";
    }
} else {
    echo "Error al confirmar la cuenta.";
}
?>
