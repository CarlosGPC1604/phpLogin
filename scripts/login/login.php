<?php
require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

// Cargar variables de entorno desde el directorio raíz del proyecto
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// Configuración de la base de datos usando variables de entorno
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];
$dbName = $_ENV['DB_NAME'];

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Verificar si la solicitud es desde un entorno web
if (!isset($_SERVER['REQUEST_METHOD'])) {
    echo "<html><body><h1>Error: Este script debe ejecutarse en un entorno de servidor web.</h1></body></html>";
    exit;
}

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<html><body><h1>Método no permitido</h1></body></html>";
    exit;
}

// Obtener y verificar los datos de la solicitud
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if (!isset($username) || !isset($password)) {
    echo "<html><body><h1>Petición inválida</h1></body></html>";
    exit;
}

// Verificar credenciales
if (checkCredentials($username, $password)) {
    echo "<html><body><h1>Inicio de sesión exitoso</h1></body></html>";
} else {
    echo "<html><body><h1>Credenciales inválidas</h1></body></html>";
}

/**
 * @param string $username
 * @param string $password
 * @return bool
 */
function checkCredentials($username, $password) {
    // Simulación de verificación de credenciales
    if ($username === 'admin' && $password === 'admin') {
        return true;
    }
    return false;
}
?>
