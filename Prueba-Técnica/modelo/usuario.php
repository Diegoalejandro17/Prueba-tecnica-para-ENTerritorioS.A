<?php
require_once __DIR__ . '/../database/conexion.php';

class Usuario {
    public static function insertar($nombre, $email) {
        $pdo = conectarOraclePDO();
        $sql = "INSERT INTO USUARIOS (NOMBRE, EMAIL) VALUES (:nombre, :email)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([':nombre' => $nombre,':email' => $email]);
            return ['exito' => true, 'mensaje' => 'Usuario registrado correctamente'];
        } catch (PDOException $e) {
            return ['exito' => false, 'mensaje' => 'Error al insertar: ' . $e->getMessage()];
        }
    }
}
