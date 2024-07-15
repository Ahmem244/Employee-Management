<?php include 'header.php' ?>
<?php include 'nav.php' ?>

    <div class="sidebar">
        <?php include 'sidebar.php' ?>
    </div>
    <div class="main detalles-curso">
        <section class="bg-panel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 mt-3">
                        <h1 class="font-family-Outfit-SemiBold titulo">
                            <a href="mis-cursos.php" class="mr-3 text-decoration-none">
                                <i class="fas fa-angle-left"></i>
                            </a> Ejemplo de Nombre de curso
                        </h1>
                        <h4 class="font-family-Inter-SemiBold fz-16">
                            Grupo: EDUP-031
                        </h4>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="modulos">
                                            <table class="table mb-0">
                                                <tr>
                                                    <td style="border: none;" width="20">
                                                        <div class="d-flex align-items-center justify-content-start" style="gap: 10px;">
                                                            <img src="../img/instructor/modulos.png" alt="icono">
                                                            <p class="mb-0 font-family-Inter-Medium fz-14">
                                                                Módulos
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td style="border: none;" align="right">
                                                        <p class="mb-0 font-family-Inter-SemiBold fz-16">
                                                            24
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-start" style="gap: 10px;">
                                                            <img src="../img/instructor/lecciones.png" alt="icono">
                                                            <p class="mb-0 font-family-Inter-Medium fz-14">
                                                                Lecciones
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td align="right">
                                                        <p class="mb-0 font-family-Inter-SemiBold fz-16">
                                                            12
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-start" style="gap: 10px;">
                                                            <img src="../img/instructor/evaluaciones.png" alt="icono">
                                                            <p class="mb-0 font-family-Inter-Medium fz-14">
                                                                Evaluaciones
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td align="right">
                                                        <p class="mb-0 font-family-Inter-SemiBold fz-16">
                                                            8
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <img src="../img/instructor/head.png" alt="head" class="w-100" style="border-radius: 4px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills font-family-Inter-Medium lista-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#contenido">Contenido</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#detalles">Detalles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#grupal">Conversación Grupal</a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="contenido" class="tab-pane active"><br>
                                        <div class="acordeon position-relative">
                                            <div class="acordeon-titulo align-items-start">
                                                <div class="">
                                                    <i class="far fa-unlock-alt fa-2x"></i>
                                                </div>
                                                <div class="">
                                                    <h3 class="font-family-Inter-SemiBold">1. Nombre de Módulo 1</h3>
                                                    <p class="font-family-Inter-Regular fz-14 mb-0">3 Lecciones</p>
                                                </div>
                                                <i class="fas fa-chevron-down flecha"></i>
                                            </div>
                                            <div class="acordeon-contenido">
                                                <div class="box-modulos">
                                                    <div class="head-modulos mb-3">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="font-family-Inter-Regular mb-0">
                                                                    Recursos y Actividades
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center justify-content-start">
                                                                <h6 class="font-family-Inter-Medium mb-0">
                                                                    Material de Estudio
                                                                </h6>
                                                            </div>
                                                            <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                                                <button type="button" class="btn-gris font-family-Inter-Medium btn-border" style="padding: 7px;">
                                                                    Descargar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table mb-0">
                                                        <tbody>
                                                        <tr class="habilitado">
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <div class="d-flex align-items-start justify-content-start" style="gap: 10px;">
                                                                    <div class="">
                                                                        <img src="../img/instructor/unlock-blue.png" alt="icono" class="unlock">
                                                                        <img src="../img/instructor/unlock-black.png" alt="icono" class="lock">
                                                                    </div>
                                                                    <div class="fz-16 font-family-Inter-Medium">
                                                                        <span class="leccion font-family-Inter-Regular d-block fz-12">
                                                                            Lección 1
                                                                        </span>
                                                                        Fases de la Creatividad 1
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0" align="right">
                                                                <a href="#" class="btn-gris font-family-Inter-Medium">
                                                                    Ver lección <i class="fal fa-play-circle ml-2"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <div class="d-flex align-items-start justify-content-start" style="gap: 10px;">
                                                                    <div class="">
                                                                        <img src="../img/instructor/unlock-blue.png" alt="icono" class="unlock">
                                                                        <img src="../img/instructor/unlock-black.png" alt="icono" class="lock">
                                                                    </div>
                                                                    <div class="fz-16 font-family-Inter-Medium">
                                                                        <span class="leccion font-family-Inter-Regular d-block fz-12">
                                                                            Lección 1
                                                                        </span>
                                                                        Fases de la Creatividad 1
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0" align="right">
                                                                <a href="#" class="btn-gris font-family-Inter-Medium">
                                                                    Ver lección <i class="fal fa-play-circle ml-2"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acordeon position-relative dishabilitado">
                                            <div class="acordeon-titulo align-items-start">
                                                <div class="">
                                                    <i class="far fa-lock-alt fa-2x"></i>
                                                </div>
                                                <div class="">
                                                    <h3 class="font-family-Inter-SemiBold">2. Nombre de Módulo 2</h3>
                                                    <p class="font-family-Inter-Regular fz-14 mb-0">
                                                        3 Lecciones
                                                    </p>
                                                </div>
                                                <i class="fas fa-chevron-down flecha"></i>
                                            </div>
                                            <div class="acordeon-contenido">
                                                <div class="box-modulos">
                                                    <div class="head-modulos mb-3">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="font-family-Inter-Regular mb-0">
                                                                    Recursos y Actividades
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center justify-content-start">
                                                                <h6 class="font-family-Inter-Medium mb-0">
                                                                    Material de Estudio
                                                                </h6>
                                                            </div>
                                                            <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                                                <button type="button" class="btn-gris font-family-Inter-Medium btn-border" style="padding: 7px;">
                                                                    Descargar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <div class="d-flex align-items-start justify-content-start" style="gap: 10px;">
                                                                    <div class="">
                                                                        <img src="../img/instructor/unlock-blue.png" alt="icono" class="unlock">
                                                                        <img src="../img/instructor/unlock-black.png" alt="icono" class="lock">
                                                                    </div>
                                                                    <div class="fz-16 font-family-Inter-Medium">
                                                                        <span class="leccion font-family-Inter-Regular d-block fz-12">
                                                                            Lección 1
                                                                        </span>
                                                                        Fases de la Creatividad 1
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0" align="right">
                                                                <a href="#" class="btn-gris font-family-Inter-Medium">
                                                                    Ver lección <i class="fal fa-play-circle ml-2"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <div class="d-flex align-items-start justify-content-start" style="gap: 10px;">
                                                                    <div class="">
                                                                        <img src="../img/instructor/unlock-blue.png" alt="icono" class="unlock">
                                                                        <img src="../img/instructor/unlock-black.png" alt="icono" class="lock">
                                                                    </div>
                                                                    <div class="fz-16 font-family-Inter-Medium">
                                                                        <span class="leccion font-family-Inter-Regular d-block fz-12">
                                                                            Lección 1
                                                                        </span>
                                                                        Fases de la Creatividad 1
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0" align="right">
                                                                <a href="#" class="btn-gris font-family-Inter-Medium">
                                                                    Ver lección <i class="fal fa-play-circle ml-2"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="detalles" class="tab-pane fade"><br>
                                        <div class="box-white">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <h5 class="font-family-Outfit-SemiBold">Detalles de Curso</h5>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <button type="button"
                                                            class="btn-gris font-family-Inter-Medium btn-border"
                                                            style="padding: 7px;">
                                                        Editar
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="demo font-family-Inter-Medium">
                                            <textarea>
                                                <p>
                                                    Laura Rodríguez es una apasionada maestra de diseño con más de 10 años de experiencia en la industria. Su amor por el arte y la creatividad la llevó a dedicarse a la enseñanza, compartiendo su conocimiento y fomentando el crecimiento de nuevos talentos en el campo del diseño. Con una sólida formación académica en diseño gráfico y una amplia experiencia práctica, Laura brindó a sus estudiantes una perspectiva realista y actualizada de la industria del diseño.
                                                </p>
                                                <p>
                                                    Su enfoque pedagógico se basa en la combinación de teoría y práctica, alentando a sus estudiantes a explorar su creatividad y desarrollar habilidades técnicas sólidas.
                                                </p>
                                                <h5 style="font-weight: bold;">Cuso Diseño Digital</h5>
                                                <p>Descripción</p>
                                                <p>
                                                    ¡Bienvenido al apasionante mundo del diseño! Este curso te invita a explorar tu creatividad y descubrir las infinitas posibilidades que ofrece el diseño. Aprenderás los fundamentos del diseño visual, desde principios básicos hasta técnicas avanzadas, para crear proyectos visuales impactantes y efectivos.
                                                </p>
                                                <p>
                                                    Durante el curso, te sumergirás en los elementos esenciales del diseño, como la composición, el color, la tipografía y la estructura visual. A través de lecciones interactivas, ejercicios prácticos y proyectos emocionantes, desarrollarás habilidades técnicas sólidas y aprenderás a aplicar conceptos de diseño en diferentes contextos
                                                </p>
                                                <h5 style="font-weight: bold;">¿Qué Aprenderás?</h5>
                                                <p>Descripción</p>
                                                <ul>
                                                    <li>Fundamentos del Diseño</li>
                                                    <li>Herramientas y Software de Diseño</li>
                                                    <li>Diseño Digital</li>
                                                    <li>Diseño de Identidad de Marca</li>
                                                    <li>Diseño Impreso y Editorial</li>
                                                </ul>
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="grupal" class="tab-pane fade"><br>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="boxx-chat">
                                                    <form action="">
                                                        <div class="form-chat">
                                                            <img src="../img/profile.jpeg" alt="profile">
                                                            <input type="text" name="comentario" id="comentario"
                                                                   placeholder="Que quieres compartir con tu grupo?">
                                                            <div>
                                                                <label for="archivofoto" style="cursor: pointer;" class="mb-0">
                                                                    <i class="fas fa-camera"></i>
                                                                </label>
                                                                <input type="file" id="archivofoto" name="archivofoto"
                                                                       style="display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 text-right">
                                                            <button type="button"
                                                                    class="btn-blue btn-gris font-family-Inter-Regular d-inline-block">
                                                                Comentar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="boxx-chat">
                                                    <!-- inicio comentario-->
                                                    <div class="cuadro-comentarios">
                                                        <div class="cuadro-perfil">
                                                            <div class="cuadro-datos">
                                                                <img src="../img/profile.jpeg" alt="profile">
                                                                <div class="">
                                                                    <h5 class="mb-0 font-family-Inter-Medium">
                                                                        Carla García
                                                                    </h5>
                                                                    <p class="mb-0 font-family-Inter-Regular">
                                                                        12:00 PM - 21/04/2023
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdownMenuLink d-inline-block font-family-Inter-Regular"
                                                                   href="#" role="button" id="dropdownMenuLink"
                                                                   data-toggle="dropdown" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h fa-2x"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                     aria-labelledby="dropdownMenuLink"
                                                                     style="will-change: transform;">
                                                                    <a class="dropdown-item texto-1 font-family-Inter-Regular"
                                                                       href="#">Editar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="detalle-comentarios">
                                                            <p class="font-family-Inter-Regular">
                                                                ¡Guau! Acabo de terminar este curso y estoy impresionado. Ha
                                                                sido una experiencia realmente enriquecedora. Aprendí tanto
                                                                sobre los fundamentos del diseño y también pude aplicar mis
                                                                conocimientos en proyectos prácticos.
                                                            </p>
                                                            <img src="../img/instructor/imagen-curso.jpg" alt="img">
                                                        </div>
                                                    </div>
                                                    <!-- fin comentario-->

                                                    <!-- inicio comentario-->
                                                    <div class="cuadro-comentarios">
                                                        <div class="cuadro-perfil">
                                                            <div class="cuadro-datos">
                                                                <img src="../img/profile.jpeg" alt="profile">
                                                                <div class="">
                                                                    <h5 class="mb-0 font-family-Inter-Medium">
                                                                        Carla García
                                                                    </h5>
                                                                    <p class="mb-0 font-family-Inter-Regular">
                                                                        12:00 PM - 21/04/2023
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdownMenuLink d-inline-block font-family-Inter-Regular"
                                                                   href="#" role="button" id="dropdownMenuLink"
                                                                   data-toggle="dropdown" aria-haspopup="true"
                                                                   aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h fa-2x"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                     aria-labelledby="dropdownMenuLink"
                                                                     style="will-change: transform;">
                                                                    <a class="dropdown-item texto-1 font-family-Inter-Regular"
                                                                       href="#">Editar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="detalle-comentarios">
                                                            <p class="font-family-Inter-Regular">
                                                                ¡Guau! Acabo de terminar este curso y estoy impresionado. Ha
                                                                sido una experiencia realmente enriquecedora. Aprendí tanto
                                                                sobre los fundamentos del diseño y también pude aplicar mis
                                                                conocimientos en proyectos prácticos.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- fin comentario-->

                                                    <form action="">
                                                        <div class="form-chat">
                                                            <img src="../img/profile.jpeg" alt="profile">
                                                            <input type="text" name="comentario" id="comentario"
                                                                   placeholder="Que quieres compartir con tu grupo?">
                                                            <div>
                                                                <label for="archivofoto" style="cursor: pointer;" class="mb-0">
                                                                    <i class="fas fa-camera"></i>
                                                                </label>
                                                                <input type="file" id="archivofoto" name="archivofoto"
                                                                       style="display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 text-right">
                                                            <button type="button"
                                                                    class="btn-blue btn-gris font-family-Inter-Regular d-inline-block">
                                                                Comentar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include 'footer.php' ?>
