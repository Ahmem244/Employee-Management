

<!-- Modal suspender-->
<div class="modal fade" id="modalsuspender" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-radius-12">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="box1" id="box1">
                            <img src="../img/help.png" alt="help">
                            <p class="font-family-Inter-SemiBold">
                                ¿Estás seguro que deseas realizar esta operación?
                            </p>
                        </div>
                        <div class="box2 d-none" id="box2">
                            <img src="../img/check.png" alt="check">
                            <p class="font-family-Inter-SemiBold">
                                Operación exitosa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer align-items-center justify-content-center">
                <button type="button" class="btn-gris font-family-Inter-Medium btn-border" data-dismiss="modal" id="no">No</button>
                <button type="button" class="btn-gris font-family-Inter-Medium btn-blue" id="si">Si</button>
                <button type="button" class="btn-gris font-family-Inter-Medium btn-blue d-none" id="ok" data-dismiss="modal">ok</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal alerta mensajes-->
<div class="modal left fade" id="modalalerta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-family-Outfit-SemiBold">Notificaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body body_modal">
                <h6 class="font-family-Inter-Light mb-3">Hoy <span>2</span></h6>
                <div class="mensaje_box d-flex align-items-start justify-content-start mb-3">
                    <div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div>
                        <p class="mb-0 font-family-Inter-Medium">Tienes un mensaje</p>
                        <span class="font-family-Inter-Regular">Fram Damian</span>
                    </div>
                </div>
                <div class="mensaje_box d-flex align-items-start justify-content-start mb-3">
                    <div>
                        <i class="fas fa-circle"></i>
                    </div>
                    <div>
                        <p class="mb-0 font-family-Inter-Medium">Felicidades por terminar el curso</p>
                        <span class="font-family-Inter-Regular">Curso Diseño</span>
                    </div>
                </div>
                <h6 class="font-family-Inter-Light mt-3 mb-3">Ayer</h6>
                <div class="mensaje_box d-flex align-items-start justify-content-start mb-3">
                    <div>
                        <i class="fas fa-circle leido"></i>
                    </div>
                    <div>
                        <p class="mb-0 font-family-Inter-Medium">Tienes un mensaje</p>
                        <span class="font-family-Inter-Regular">Fram Damian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var currentURL = window.location.pathname;

        $(".nav-link").each(function() {
            var linkHref = $(this).attr("href"); // Obtiene la ruta relativa del enlace

            // Asegura que la URL actual incluya la ruta del enlace
            if (currentURL.indexOf(linkHref) !== -1) {
                $(this).addClass("activo");
            }
        });

        $('#abrirperfil').click(function () {
            $('#perfil_abs').toggle();
            $(this).find("i").toggleClass("fa-angle-down fa-angle-up");
        })
        $('#navegador li a').click(function () {
            $('#navegador li a').removeClass('activo');
            $(this).addClass('activo');
        })
        // $(".dropdownMenuLink").click(function() {
        //     $(this).find("i").toggleClass("fa-chevron-down fa-chevron-up fa-chevron-animate");
        // });
        $('#si').click(function () {
            $('#box1').addClass('d-none');
            $('#box2').removeClass('d-none');
            $('#no').addClass('d-none');
            $('#si').addClass('d-none');
            $('#ok').removeClass('d-none');
        })
        $('#ok').click(function () {
            setTimeout(function(){
                $('#box1').removeClass('d-none');
                $('#box2').addClass('d-none');
                $('#no').removeClass('d-none');
                $('#si').removeClass('d-none');
                $('#ok').addClass('d-none');
            }, 2000);
        })

        $(".acordeon-titulo").click(function() {
            // Cerrar otros paneles
            $(".acordeon-contenido").not($(this).next(".acordeon-contenido")).slideUp();
            $(".acordeon-titulo").not($(this)).removeClass("activo");

            // Abrir o cerrar el panel actual
            $(this).toggleClass("activo");
            $(this).next(".acordeon-contenido").slideToggle();
        });

        $("#campo-archivo").change(function() {
            var archivoSeleccionado = $(this)[0].files[0];
            if (archivoSeleccionado) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#vista-previa").attr("src", e.target.result);
                };
                reader.readAsDataURL(archivoSeleccionado);
            }
        });

        $('#siguiente-box').click(function () {
            $('#lista1').removeClass('box-1-activo').addClass('box-1-activo-1');
            $('#lista2').addClass('box-1-activo');
            $('#siguiente-box').addClass('d-none');
            $('#cerrar').addClass('d-none');
            $('#volver-box').removeClass('d-none');
            $('#reset').removeClass('d-none');
            $('#box-open-accesos').removeClass('d-none');
            $('#box-open-datos').addClass('d-none');
        })
        $('#reset').click(function () {
            setTimeout(function(){
                $('#lista1').addClass('box-1-activo').removeClass('box-1-activo-1');
                $('#lista2').removeClass('box-1-activo');
                $('#siguiente-box').removeClass('d-none');
                $('#cerrar').removeClass('d-none');
                $('#volver-box').addClass('d-none');
                $('#reset').addClass('d-none');
                $('#box-open-accesos').addClass('d-none');
                $('#box-open-datos').removeClass('d-none');
            }, 1000);
        })
        $('#cerrar-modal').click(function () {
            setTimeout(function(){
                $('#lista1').addClass('box-1-activo').removeClass('box-1-activo-1');
                $('#lista2').removeClass('box-1-activo');
                $('#siguiente-box').removeClass('d-none');
                $('#cerrar').removeClass('d-none');
                $('#volver-box').addClass('d-none');
                $('#reset').addClass('d-none');
                $('#box-open-accesos').addClass('d-none');
                $('#box-open-datos').removeClass('d-none');
            }, 1000);
        })
        $('#volver-box').click(function () {
            $('#lista1').addClass('box-1-activo').removeClass('box-1-activo-1');
            $('#lista2').removeClass('box-1-activo');
            $('#siguiente-box').removeClass('d-none');
            $('#cerrar').removeClass('d-none');
            $('#volver-box').addClass('d-none');
            $('#reset').addClass('d-none');
            $('#box-open-accesos').addClass('d-none');
            $('#box-open-datos').removeClass('d-none');
        })

        // Al hacer clic en el checkbox "Marcar Todos"
        $("#marcar-todos").click(function() {
            $(".opcion").prop("checked", this.checked);
        });

        // Al hacer clic en un checkbox individual
        $(".opcion").click(function() {
            if ($(".opcion:checked").length === $(".opcion").length) {
                $("#marcar-todos").prop("checked", true);
            } else {
                $("#marcar-todos").prop("checked", false);
            }
        });
    });
</script>
</body>
</html>