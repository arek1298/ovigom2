<?php
// Conectar a la base de datos
$host = 'localhost';
$dbname = 'pruebas';
$username = 'root';
$password = ''; // Asegúrate de poner la contraseña correcta de tu MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$token = bin2hex(random_bytes(32)); // Genera un token único para la confirmación

// Guardar los datos en la base de datos
$sql = "INSERT INTO usuarios (email, password, token) VALUES (:email, :password, :token)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':token', $token);

if ($stmt->execute()) {
    // Enviar correo de confirmación
    $subject = "Confirma tu correo electrónico";
    $confirmationLink = "http://localhost/confirm.php?token=$token";
    $message = "Gracias por registrarte. Haz clic en el siguiente enlace para confirmar tu correo electrónico: <a href='$confirmationLink'>Confirmar Cuenta</a>";
    $headers = "From: no-reply@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($email, $subject, $message, $headers)) {
        echo "Registro exitoso. Revisa tu correo para confirmar tu cuenta.";
    } else {
        echo "Error al enviar el correo de confirmación.";
    }
} else {
    echo "Error al registrar el usuario.";
}
?>
