<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">
    <h2>Formulario de Usuario</h2>

    <form id="formUsuario">
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" id="nombre" class="form-control" maxlength="100" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" id="email" class="form-control" maxlength="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

    <div id="mensaje" class="mt-3"></div>
</div>

<script src="../main.js"></script>
</body>
</html>
 