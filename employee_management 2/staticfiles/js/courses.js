

$(document).ready(function () {
    // Al hacer clic en el botón, activar el input file
    $('#btnCargarImagen').click(function () {
        $('#inputImagen').click();
    });

    // Al cargar la página, mostrar una imagen por defecto
    mostrarVistaPreviaDefault();

    // Cuando se selecciona una nueva imagen, mostrar su vista previa
    $('#inputImagen').change(function () {
        mostrarVistaPrevia(this);
    });

    function mostrarVistaPrevia(input) {
        if (input.files && input.files[0]) {
            var lector = new FileReader();

            lector.onload = function (e) {
                $('#vistaPrevia').html('<img src="' + e.target.result + '" alt="Vista Previa" >');
            };

            lector.readAsDataURL(input.files[0]);
        }
    }

    function mostrarVistaPreviaDefault() {
        // Ruta de la imagen por defecto
        var imagenPorDefecto = '/static/img/560x328.png';

        // Mostrar la vista previa de la imagen por defecto
        $('#vistaPrevia').html('<img src="' + imagenPorDefecto + '" alt="Vista Previa" width="100%">');
    }
});


$(document).ready(function () {
    // Al hacer clic en el botón, activar el input file
    $('#btnCargarImagen1').click(function () {
        $('#inputImagen1').click();
    });

    // Al cargar la página, mostrar una imagen por defecto
    mostrarVistaPreviaDefault1();

    // Cuando se selecciona una nueva imagen, mostrar su vista previa y validar las dimensiones
    $('#inputImagen1').change(function () {
        var archivo = this.files[0];

        // Validar dimensiones mínimas
        if (archivo && archivo.type.startsWith('image/')) {
            var img = new Image();
            img.onload = function () {
                if (img.width >= 1072 && img.height >= 312) {
                    mostrarVistaPrevia1(archivo);
                } else {
                    alert('La imagen debe tener dimensiones mínimas de 1072x312.');
                    // Restablecer el valor del input file para evitar la carga de la imagen no válida
                    $('#inputImagen1').val('');
                }
            };
            img.src = URL.createObjectURL(archivo);
        }
    });

    function mostrarVistaPrevia1(archivo) {
        var lector = new FileReader();
        lector.onload = function (e) {
            $('#vistaPrevia1').html('<img src="' + e.target.result + '" alt="Vista Previa">');
        };
        lector.readAsDataURL(archivo);
    }

    function mostrarVistaPreviaDefault1() {
        // Ruta de la imagen por defecto
        var imagenPorDefecto = '/static/img/1072x312.png';

        // Mostrar la vista previa de la imagen por defecto
        $('#vistaPrevia1').html('<img src="' + imagenPorDefecto + '" alt="Vista Previa" width="100%">');
    }
});




$(document).ready(function () {

    $('.editcoursebtn').click(function (e) {

        e.preventDefault();
        var url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                // Do something with the response
                //insert html into modal-body
                $('#editCourseFormTarget').html(response)


            }
        });
    });
});



