$('#formUsuario').submit(function(e) {
    e.preventDefault();

    let nombre = $('#nombre').val().trim();
    let email = $('#email').val().trim();

    if (nombre === '' || email === '') {
        $('#mensaje').html('<div class="alert alert-danger">Todos los campos son obligatorios.</div>');
        return;
    }

    if (nombre.length > 100 || email.length > 100) {
        $('#mensaje').html('<div class="alert alert-warning">Máximo 50 caracteres por campo.</div>');
        return;
    }

    $.ajax({
        url: 'controlador/UsuarioController.php',
        method: 'POST',
        data: { nombre, email },
        success: function(res) {
            $('#mensaje').html('<div class="alert alert-success">' + res + '</div>');
            $('#formUsuario')[0].reset();
        },
        error: function() {
            $('#mensaje').html('<div class="alert alert-danger">Error.</div>');
        }
    });
});
