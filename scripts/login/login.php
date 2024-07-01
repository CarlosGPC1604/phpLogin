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
    $html .= "<h1>Error: Este script debe ejecutarse en un entorno de servidor web.</h1>";
    echo $html;
    exit();
}

// Verificar si la solicitud es POST
$_SERVER['REQUEST_METHOD'] !== 'POST' ?: $html .= "<h1>Error: Este script debe ejecutarse con el método POST.</h1>";

// Si no es POST, imprimir error y terminar
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo $html;
    exit();
}

// Obtener y verificar los datos de la solicitud
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

// Verificar si los parámetros están presentes
isset($username) && isset($password) ?: $html .= "<h1>Parámetros incorrectos</h1>";

// Si faltan parámetros, imprimir error y terminar
if (!isset($username) || !isset($password)) {
    echo $html;
    exit();
}

// Verificar credenciales
$html .= checkCredentials($username, $password) ? "<h1>Bienvenido, $username</h1>" : "<h1>Credenciales incorrectas</h1>";

// Incluir el footer y terminar
include __DIR__ . '/../../includes/footer.php';
$html .= ob_get_clean();
echo $html;

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
