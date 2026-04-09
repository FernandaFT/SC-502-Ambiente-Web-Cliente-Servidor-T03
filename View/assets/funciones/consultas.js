function soloNumeros(e) {
  var codigo = e.charCode || e.keyCode;
  if (codigo < 48 || codigo > 57) e.preventDefault();
}

$(document).ready(function () {

    $("#Id_Compra").change(function () {
        var idCompra = $(this).val();

        if (idCompra !== "") {
            $.ajax({
                url: "/SC-502-Ambiente-Web-Cliente-Servidor-T03/Controller/HomeController.php",
                method: "POST",
                dataType: "json",
                data: {
                    idCompra: idCompra
                },
                success: function (respuesta) {
                    var saldo = parseFloat(respuesta.Saldo || 0);

                    $("#SaldoAnterior").val(saldo);
                    $("#SaldoAnteriorVista").val("₡" + saldo.toLocaleString("es-CR", {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    }));
                },
                error: function (xhr, status, error) {
                    console.log("Error AJAX:", xhr.responseText);
                    console.log("Status:", status);
                    console.log("Error:", error);
                }
            });
        } else {
            $("#SaldoAnterior").val("");
            $("#SaldoAnteriorVista").val("");
        }
    });

    $("#formAbono").submit(function (e) {
        var saldo = parseFloat($("#SaldoAnterior").val()) || 0;
        var abono = parseFloat($("#Abono").val()) || 0;

        if (abono > saldo) {
            e.preventDefault();

            Swal.fire({
                title: "Monto inválido",
                html: "<b>El abono no puede ser mayor al saldo disponible.</b>",
                icon: "error",
                confirmButtonColor: "#d33",
                confirmButtonText: "OK",
                allowOutsideClick: false,
                allowEscapeKey: false,
                backdrop: true
            });
        }
    });
    $("#formAbono").validate({
        rules: {
            Id_Compra: {
                required: true
            },
            Abono: {
                required: true
            }
        },
        messages: {
            Id_Compra: {
                required: "Campo obligatorio"
            },
            Abono: {
                required: "Campo obligatorio"
            }
        },
        errorElement: "span",
        errorClass: "text-danger",
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        }
    });

});

setTimeout(function() {
    var mensaje = document.getElementById("mensajeExito");
    if (mensaje) {
        mensaje.style.transition = "opacity 0.5s ease";
        mensaje.style.opacity = "0";
            
        setTimeout(function() {
            mensaje.remove();
        }, 500);
    }
}, 2000);