$(document).ready(function () {

    $('form.ajaxpersona').submit(function (e) {
        e.preventDefault();
        var $form = $(this);
        $form.find('[type="submit"]').prop('', true);
        $.ajax({
            url: "controller/enviar-correo-contact.php",
            type: 'post',
            data: $form.serialize(),
            beforeSend: function () {
                $("#spinnerPersona").show();
            },
        }).done(function (data) {
            $date = data;
            if ($date == 'exito') {
                $("#spinnerPersona").hide();
                swal.fire('Mensaje enviado', 'Con éxito', 'success');
                $("form.ajaxpersona")[0].reset();
                $("#Contactopersona").removeAttr("disabled");
            } else {
                $("#spinnerPersona").hide();
                swal.fire('Error de Envio', 'Vuelva intentarlo mas tarde', 'error');
            }
            $("#Contactopersona").removeAttr("disabled");
        })

    });
});

$(document).ready(function () {

    $('form.ajaxempresa').submit(function (e) {
        e.preventDefault();
        var $form = $(this);
        $form.find('[type="submit"]').prop('', true);
        $.ajax({
            url: "controller/enviar-correo-empresa.php",
            type: 'post',
            data: $form.serialize(),
            beforeSend: function () {
                $("#spinnerEmpresa").show();
            },
        }).done(function (data) {
            $date = data;
            if ($date == 'exito') {
                $("#spinnerEmpresa").hide();
                swal.fire('Mensaje enviado', 'Con éxito', 'success');
                $("form.ajaxempresa")[0].reset();
                $("#Contactopersona").removeAttr("disabled");
            } else {
                $("#spinnerEmpresa").hide();
                swal.fire('Error de Envio', 'Vuelva intentarlo mas tarde', 'error');
            }
            $("#Contactopersona").removeAttr("disabled");
        })
    });
});

$(document).ready(function () {

    $('form.ajaxcontacto').submit(function (e) {
        e.preventDefault();
        var $form = $(this);
        $form.find('[type="submit"]').prop('', true);
        $.ajax({
            url: "controller/mailcontacto.php",
            type: 'post',
            data: $form.serialize(),
            beforeSend: function () {
                $("#spinnerPersona").show();
            },
        }).done(function (data) {
            $date = data;
            if ($date == 'exito') {
                $("#spinnerPersona").hide();
                swal.fire('Mensaje enviado', 'Con éxito', 'success');
                $("form.ajaxcontacto")[0].reset();
                $("#Contactopersona").removeAttr("disabled");
            } else {
                $("#spinnerPersona").hide();
                swal.fire('Error de Envio', 'Vuelva intentarlo mas tarde', 'error');
            }
            $("#Contactopersona").removeAttr("disabled");
        })

    });
});

