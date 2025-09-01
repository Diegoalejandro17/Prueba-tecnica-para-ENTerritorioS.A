<?php
function conectarOraclePDO() {
    $usuario = '';        
    $contrasena = '';  
    $host = 'localhost';
    $puerto = '1521';

    $dsn = "oci:dbname=//$host:$puerto/$servicio;charset=AL32UTF8";

    try {
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error al conectar la base de datos: " . $e->getMessage());
    }
}
