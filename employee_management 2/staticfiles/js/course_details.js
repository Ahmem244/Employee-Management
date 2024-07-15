// Funciones para ajustar manualmente los puntos
function incrementarHoras() {
    var horas = parseInt($("#puntos").text());
    horas = (horas + 1) % 24;
    actualizarHora('puntos', horas);
}

function decrementarHoras() {
    var horas = parseInt($("#puntos").text());
    horas = (horas - 1 + 24) % 24;
    actualizarHora('puntos', horas);
}

// Función para actualizar la visualización de horas
function actualizarHora(elemento, valor) {
    $("#" + elemento).text(valor < 10 ? '0' + valor : valor);
}

$(document).ready(function () {
    var contador = 500;

    $('#agregar-pregunta-2').click(function () {
        contador++;
        var nuevaPregunta = '<li data-item-id="' + contador + '" class="font-family-Inter-SemiBold">' +
            '<span class="draggable"><i class="fal fa-arrows"></i></span>' +
            'Nueva pregunta ' + contador +
            '<strong class="float-right botones">' +
            '<a href="#" class="editar mr-1" id="editar-pregunta-' + contador + '"><i class="fas fa-pen"></i></a>' +
            '<a href="#" class="eliminar" id="eliminar-pregunta-' + contador + '"><i class="fas fa-trash"></i></a>' +
            '</strong>' +
            '</li>' +
            '<div class="editar-pregunta" style="display: none;" id="editar-pregunta-contenido-' + contador + '">' +
            '<div class="form-estado">' +
            '<div class="form-group">' +
            '<label for="titulodepregunta" class="d-block font-family-Inter-Regular">' +
            'Escribe la pregunta' +
            '</label>' +
            '<input type="text" name="titulodepregunto" id="titulodepregunto-' + contador + '" placeholder="Ejemplo de Pregunta" class="font-family-Inter-Medium">' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="d-block font-family-Inter-Regular">' +
            'Punto(s) por esta respuesta' +
            '</label>' +
            '<div class="cuadro-reloj w-50">' +
            '<button type="button" onclick="decrementarPuntos(' + contador + ')">' +
            '<i class="fas fa-minus"></i>' +
            '</button>' +
            '<span id="puntos-' + contador + '" class="font-family-Inter-SemiBold">00</span>' +
            '<button type="button" onclick="incrementarPuntos(' + contador + ')">' +
            '<i class="fas fa-plus"></i>' +
            '</button>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="repuesta" class="d-block font-family-Inter-Regular">' +
            'Respuesta correcta' +
            '</label>' +
            '<input type="text" name="repuesta" id="repuesta-' + contador + '" placeholder="Ejemplo de respuesta a Pregunta" class="font-family-Inter-Medium">' +
            '</div>' +
            '<div class="form-group">' +
            '<button type="button" class="step-btn next-step btn-gris font-family-Inter-Medium btn-blue">' +
            'Guardar Cambios' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>';

        $('#preguntas-lista-2 ul').append(nuevaPregunta);
    });

    $('#preguntas-lista-2').on('click', '.eliminar', function () {
        $(this).closest('li').next('.editar-pregunta').remove();
        $(this).closest('li').remove();
    });

    $('#preguntas-lista-2').on('click', '.editar', function () {
        // Cerrar las demás secciones de edición
        $('.editar-pregunta').not($(this).closest('li').next('.editar-pregunta')).hide();

        // Restaurar el color original de los li
        $('#preguntas-lista-2 li').css({
            'background-color': '#F2F4FA',
            'color': '#000'
        });

        // Alternar la visibilidad de la sección de edición correspondiente
        var seccionEdicion = $(this).closest('li').next('.editar-pregunta');
        seccionEdicion.toggle();

        // Cambiar el color de fondo y texto del li según si la sección de edición está abierta o cerrada
        $(this).closest('li').css({
            'background-color': seccionEdicion.is(':visible') ? '#4128E6' : '#F2F4FA',
            'color': seccionEdicion.is(':visible') ? '#FFFFFF' : '#000'
        });

        // Cambiar el color de los iconos de editar y eliminar
        /*var iconos = $(this).find('i');
        iconos.css('color', seccionEdicion.is(':visible') ? '#FFFFFF' : '');*/
    });
});


function incrementarPuntos(contador) {
    // Obtener el elemento span que muestra los puntos
    var puntosElement = $('#puntos-' + contador);

    // Obtener el valor actual de los puntos
    var puntos = parseInt(puntosElement.text());

    // Incrementar los puntos
    puntos++;

    // Actualizar el valor mostrado
    puntosElement.text(puntos < 10 ? '0' + puntos : puntos);
}

function decrementarPuntos(contador) {
    // Obtener el elemento span que muestra los puntos
    var puntosElement = $('#puntos-' + contador);

    // Obtener el valor actual de los puntos
    var puntos = parseInt(puntosElement.text());

    // Decrementar los puntos si son mayores que cero
    if (puntos > 0) {
        puntos--;

        // Actualizar el valor mostrado
        puntosElement.text(puntos < 10 ? '0' + puntos : puntos);
    }
}


$(document).ready(function () {
    var contador = 301;

    $('#agregar-pregunta').click(function () {
        contador++;
        var nuevaPregunta = '<li data-item-id="' + contador + '" class="font-family-Inter-SemiBold">' +
            '<span class="draggable"><i class="fal fa-arrows"></i></span>' +
            'Nueva pregunta ' + contador +
            '<strong class="float-right botones">' +
            '<a href="#" class="editar mr-3"><i class="fas fa-pen"></i></a>' +
            '<a href="#" class="eliminar"><i class="fas fa-trash"></i></a>' +
            '</strong>' +
            '</li>' +
            '<div class="editar-pregunta" style="display: none;">' +
            '<div class="form-estado">' +
            '<div class="form-group">' +
            '<label for="titulodepregunto" class="d-block font-family-Inter-Regular">' +
            'Escribe la pregunta' +
            '</label>' +
            '<input type="text" name="titulodepregunto" id="titulodepregunto" placeholder="Ejemplo de Pregunta" class="font-family-Inter-Medium">' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="repuesta" class="d-block font-family-Inter-Regular">' +
            'Respuesta correcta' +
            '</label>' +
            '<input type="text" name="repuesta" id="repuesta" placeholder="Ejemplo de respuesta a Pregunta" class="font-family-Inter-Medium">' +
            '</div>' +
            '<div class="form-group">' +
            '<button type="button" class="step-btn next-step btn-gris font-family-Inter-Medium btn-blue">' +
            'Guardar Cambios' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>';

        $('#preguntas-lista').append(nuevaPregunta);
    });

    $('#preguntas-lista').on('click', '.eliminar', function () {
        $(this).closest('li').next('.editar-pregunta').remove();
        $(this).closest('li').remove();
    });

    $('#preguntas-lista').on('click', '.editar', function () {
        // Cerrar las demás secciones de edición
        $('.editar-pregunta').not($(this).closest('li').next('.editar-pregunta')).hide();

        // Restaurar el color original de los li
        $('#preguntas-lista li').css({
            'background-color': '#F2F4FA',
            'color': '#000'
        });

        // Alternar la visibilidad de la sección de edición correspondiente
        var seccionEdicion = $(this).closest('li').next('.editar-pregunta');
        seccionEdicion.toggle();

        // Cambiar el color de fondo y texto del li según si la sección de edición está abierta o cerrada
        $(this).closest('li').css({
            'background-color': seccionEdicion.is(':visible') ? '#4128E6' : '#F2F4FA',
            'color': seccionEdicion.is(':visible') ? '#FFFFFF' : '#000'
        });

        // Cambiar el color de los iconos de editar y eliminar
        // var iconos = $(this).find('i');
        // iconos.css('color', seccionEdicion.is(':visible') ? '#FFFFFF' : '');
    });
});


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
                $('#vistaPrevia').html('<img src="' + e.target.result + '" alt="Vista Previa" class="w-100">');
            };

            lector.readAsDataURL(input.files[0]);
        }
    }

    function mostrarVistaPreviaDefault() {
        // Ruta de la imagen por defecto
        var imagenPorDefecto = '{% static "img/560x328.png" %}';

        // Mostrar la vista previa de la imagen por defecto
        $('#vistaPrevia').html('<img src="' + imagenPorDefecto + '" alt="Vista Previa">');
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
            $('#vistaPrevia1').html('<img src="' + e.target.result + '" alt="Vista Previa" class="w-100">');
        };
        lector.readAsDataURL(archivo);
    }

    function mostrarVistaPreviaDefault1() {
        // Ruta de la imagen por defecto
        var imagenPorDefecto = '{% static "img/1072x312.png" %}'

        // Mostrar la vista previa de la imagen por defecto
        $('#vistaPrevia1').html('<img src="' + imagenPorDefecto + '" alt="Vista Previa">');
    }
});

$('#boton1').click(function () {
    $('#datoss').removeClass('d-none');
    $('#contenido').addClass('d-none');
});
$('#boton2').click(function () {
    $('#contenido').removeClass('d-none');
    $('#datoss').addClass('d-none');
});
$('#boton3').click(function () {
    $('#contenido').removeClass('d-none');
    $('#datoss').addClass('d-none');
});


$(function () {
    dragula([document.getElementById("left"), document.getElementById("right")], {
        revertOnSpill: true
    })
        .on('drag', function (el) {
            // add 'is-moving' class to element being dragged
            el.classList.add('is-moving');
        })
        .on('dragend', function (el) {
            // remove 'is-moving' class from element after dragging has stopped
            el.classList.remove('is-moving');

            // add the 'is-moved' class for 600ms then remove it
            window.setTimeout(function () {
                el.classList.add('is-moved');
                window.setTimeout(function () {
                    el.classList.remove('is-moved');
                }, 600);
            }, 100);
        });

}());


$(document).ready(function () {
    // Al hacer clic en el botón, activar el input file
    $('.btnCargarArchivos').click(function () {
        $(this).next('.inputArchivos').click();
    });

    // Al seleccionar archivos, mostrar la lista y procesar cada archivo
    $('.inputArchivos').change(function () {
        agregarArchivos(this.files, $(this).siblings('.listaArchivos'));
    });

    // Función para agregar archivos a la lista
    function agregarArchivos(archivos, listaArchivos) {
        // Mostrar cada archivo con un botón de eliminación
        for (var i = 0; i < archivos.length; i++) {
            var archivo = archivos[i];
            var listItem = $('<li class="font-family-Inter-Medium">');
            listItem.text(archivo.name);

            // Agregar botón de eliminación con el icono de la papelera
            var botonEliminar = $('<button class="btn-borrar">');
            botonEliminar.html('<i class="fas fa-trash"></i>');
            botonEliminar.click(function () {
                listItem.remove();
            });

            listItem.append(botonEliminar);
            listaArchivos.append(listItem);
        }

        // Limpiar el valor del input file para permitir la selección del mismo archivo nuevamente
        $(this).val('');
    }
});


function ajustarTiempo(unidad, operacion) {
    var valor = parseInt($('#' + unidad).text());
    if (operacion === '+') {
        valor = (valor + 1) % 60;
    } else {
        valor = (valor - 1 + 60) % 60;
    }
    $('#' + unidad).text(valor.toString().padStart(2, '0'));
}

$(document).ready(function () {
    $('#masHoras').click(function () {
        ajustarTiempo('horas', '+');
    });

    $('#menosHoras').click(function () {
        ajustarTiempo('horas', '-');
    });

    $('#masMinutos').click(function () {
        ajustarTiempo('minutos', '+');
    });

    $('#menosMinutos').click(function () {
        ajustarTiempo('minutos', '-');
    });

    $('#masSegundos').click(function () {
        ajustarTiempo('segundos', '+');
    });

    $('#menosSegundos').click(function () {
        ajustarTiempo('segundos', '-');
    });
});


// ------------register-steps--------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var $target = $(e.target);
        if ($target.hasClass('disabled')) {
            return false;
        }

        // handle with prgressbar
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 4) * 100;
        $('.progress-bar').css({width: percent + '%'});
        $('.progress-bar').text('Step ' + step + ' of 4');

    });

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $target = $(e.target);
        $target.parent().addClass('active');
    });

    $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $target = $(e.target);
        $target.parent().removeClass('active');
    });


    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li a.active');
        $active.parent().next().children().removeClass('disabled');
        $active.parent().addClass('done');
        nextTab($active);
    });

    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li a.active');
        prevTab($active);
    });
});

function nextTab(elem) {
    $(elem).parent().next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
    $(elem).parent().prev().find('a[data-toggle="tab"]').click();
}





