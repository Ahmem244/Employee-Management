<?php include 'header.php' ?>
<?php include 'nav.php' ?>

    <div class="sidebar">
        <?php include 'sidebar.php' ?>
    </div>
    <div class="main">
        <section class="bg-panel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 mt-3">
                        <h1 class="font-family-Outfit-SemiBold titulo">
                            <a href="mis-grupos.php" class="mr-3 text-decoration-none">
                                <i class="fas fa-angle-left"></i>
                            </a> EDUP-031-Fotomontaje Publicitario Avanzado I
                        </h1>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills font-family-Inter-Medium lista-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#integrantes">Integrantes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#programacion">Programación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sesiones">Sesiones Grabadas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grupal">Conversación Grupal</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="integrantes" class="tab-pane active"><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-border">
                                            <div class="header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="" class="buscador">
                                                            <div class="form-group position-relative">
                                                                <label for="buscar"><i
                                                                            class="fal fa-search"></i></label>
                                                                <input type="text" name="buscar" id="buscar"
                                                                       placeholder="Buscar">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                                        <p class="mb-0 font-family-Inter-Medium fz-14">
                                                            23 Integrantes
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                        <tr class="font-family-Outfit-SemiBold">
                                                            <th>Estudiante</th>
                                                            <th>Últ. conexión</th>
                                                            <th>Progreso</th>
                                                            <th>Promedio</th>
                                                            <th style="text-align: right;">Opciones</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="texto-usuario">
                                                                <p class="font-family-Inter-Regular">
                                                                    <img src="../img/user.png" alt="user">
                                                                    <strong class="font-family-Inter-Regular">
                                                                        Fram Carla Davila Rodriguez
                                                                    </strong>
                                                                </p>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                5:05 PM, 21/05/23
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <span class="text-blue">80%</span> Completado
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                9/10
                                                            </td>
                                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                                <div class="diplo">
                                                                    <a href="mensajes.php" class="text-decoration-none">
                                                                        <img src="../img/instructor/chat.png"
                                                                             alt="icono">
                                                                    </a>
                                                                    <a href="#" class="text-decoration-none">
                                                                        <img src="../img/instructor/diploma.png"
                                                                             alt="icono">
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="texto-usuario">
                                                                <p class="font-family-Inter-Regular">
                                                                    <img src="../img/user.png" alt="user">
                                                                    <strong class="font-family-Inter-Regular">
                                                                        Fram Carla Davila Rodriguez
                                                                    </strong>
                                                                </p>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                5:05 PM, 21/05/23
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <span class="text-blue">100%</span> Completado
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                9/10
                                                            </td>
                                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                                <div class="diplo">
                                                                    <a href="mensajes.php" class="text-decoration-none">
                                                                        <img src="../img/instructor/chat.png"
                                                                             alt="icono">
                                                                    </a>
                                                                    <a href="#" class="text-decoration-none">
                                                                        <img src="../img/instructor/diploma.png"
                                                                             alt="icono">
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="texto-usuario">
                                                                <p class="font-family-Inter-Regular">
                                                                    <img src="../img/user.png" alt="user">
                                                                    <strong class="font-family-Inter-Regular">
                                                                        Fram Carla Davila Rodriguez
                                                                    </strong>
                                                                </p>
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                5:05 PM, 21/05/23
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                <span class="text-blue">100%</span> Completado
                                                            </td>
                                                            <td class="font-family-Inter-Medium texto-0">
                                                                -
                                                            </td>
                                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                                <div class="diplo">
                                                                    <a href="mensajes.php" class="text-decoration-none">
                                                                        <img src="../img/instructor/chat.png"
                                                                             alt="icono">
                                                                    </a>
                                                                    <a href="#" class="text-decoration-none">
                                                                        <img src="../img/instructor/diploma.png"
                                                                             alt="icono">
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <ul class="pagination justify-content-end font-family-Inter-Regular"
                                            style="margin:20px 0">
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                                            href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                                     href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="programacion" class="tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-white">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <h5 class="font-family-Outfit-SemiBold">Programación</h5>
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
                                                Laura Rodríguez es una apasionada maestra de diseño con más de 10 años de experiencia en la industria. Su amor por el arte y la creatividad la llevó a dedicarse a la enseñanza, compartiendo su conocimiento y fomentando el crecimiento de nuevos talentos en el campo del diseño.
                                                </p>
                                                <p>
                                                <img src="../img/instructor/materia.png" alt="Materia" width="100%"
                                                     height="auto">
                                                </p>
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sesiones" class="tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-white">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <h5 class="font-family-Outfit-SemiBold">Sesiones Grabadas</h5>
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
                                                <h4 style="font-weight: bold;">SESIÓN 1:</h4>
                                                <p>
                                                <img src="../img/instructor/sesion.png" alt="Materia" width="100%"
                                                     height="auto">
                                                </p>
                                                <h4 style="font-weight: bold;">SESIÓN 1:</h4>
                                                <p>
                                                <img src="../img/instructor/sesion.png" alt="Materia" width="100%"
                                                     height="auto">
                                                </p>
                                            </textarea>
                                            </div>
                                        </div>
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
        </section>
    </div>

<?php include 'footer.php' ?>