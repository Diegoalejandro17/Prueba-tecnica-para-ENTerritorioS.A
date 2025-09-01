<?php
require_once __DIR__ . '/../modelo/usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';

    $respuesta = Usuario::insertar($nombre, $email);
    echo $respuesta['mensaje'];
}
