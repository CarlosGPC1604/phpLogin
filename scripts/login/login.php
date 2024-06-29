<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($username) && isset($password)) {
        if($username == 'admin' && $password == 'admin') {
            echo json_encode(array('status' => 'success', 'message' => 'Inicio de sesión exitoso'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Credenciales inválidas'));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Petición inválida'));
    }
}
?>