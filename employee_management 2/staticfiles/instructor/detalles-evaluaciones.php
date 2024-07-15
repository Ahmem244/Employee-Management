<?php include 'header.php' ?>
<?php include 'nav.php' ?>

    <div class="sidebar">
        <?php include 'sidebar.php' ?>
    </div>
    <div class="main">
        <section class="bg-panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-4 mt-3">
                        <h1 class="font-family-Outfit-SemiBold titulo">
                            <a href="evaluaciones.php" class="mr-3 text-decoration-none">
                                <i class="fas fa-angle-left"></i>
                            </a> Gestión de usuarios
                        </h1>
                        <h4 class="font-family-Inter-SemiBold fz-16">
                            EDUP-031 - Fotomontaje Publicitario Avanzado I
                        </h4>
                    </div>
                    <div class="col-md-12">
                        <div class="box-border">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="" class="buscador">
                                            <div class="form-group position-relative">
                                                <label for="buscar"><i class="fal fa-search"></i></label>
                                                <input type="text" name="buscar" id="buscar"
                                                       placeholder="Buscar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 text-right d-flex align-items-center justify-content-end">
                                        <p class="mb-0 font-family-Inter-Medium fz-14">
                                            47/50 Finalizados
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
                                            <th>Empezó</th>
                                            <th>Finalizó</th>
                                            <th>Nota</th>
                                            <th style="text-align: right;">Realizados</th>
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
                                                01:20 PM - 05/02/2023
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                02:20 PM - 05/02/2023
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                40/50 pts
                                            </td>
                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                <a href="detalle-evaluacion.php">Ver detalles</a>
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
                                                01:20 PM - 05/02/2023
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                02:20 PM - 05/02/2023
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                40/50 pts
                                            </td>
                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                <a href="detalle-evaluacion.php">Ver detalles</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="pagination justify-content-end font-family-Inter-Regular" style="margin:20px 0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal  crear susuario-->
    <div class="modal fade" id="crearusuario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content border-radius-12">
                <div class="modal-header" style="border-radius: 12px 12px 0 0;">
                    <h5 class="modal-title font-family-Outfit-SemiBold">Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-usuario">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" class="font-family-Inter-Regular">Nombres</label>
                                    <input type="text" name="nombre" id="nombre" class="font-family-Inter-Medium" placeholder="Nombres">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos" class="font-family-Inter-Regular">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos" class="font-family-Inter-Medium" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nickname" class="font-family-Inter-Regular">Nombre de Usuario</label>
                                    <input type="text" name="nickname" id="nickname" class="font-family-Inter-Medium" placeholder="Nombre de Usuario">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad" class="font-family-Inter-Regular">Ciudad</label>
                                    <select class="form-control font-family-Inter-Medium" id="ciudad" name="ciudad">
                                        <option selected class="d-none">Selecciona ciudad</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departamento" class="font-family-Inter-Regular">Departamento</label>
                                    <select class="form-control font-family-Inter-Medium" id="departamento" name="departamento">
                                        <option selected class="d-none">Selecciona departamento</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono" class="font-family-Inter-Regular">Teléfono</label>
                                    <input type="text" name="telefono" id="telefono" class="font-family-Inter-Medium" placeholder="+503 123456789">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="correo" class="font-family-Inter-Regular">Correo</label>
                                    <input type="email" name="correo" id="correo" class="font-family-Inter-Medium" placeholder="Correo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dui" class="font-family-Inter-Regular">Número DUI</label>
                                    <input type="text" name="dui" id="dui" class="font-family-Inter-Medium" placeholder="76543219">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sexo" class="font-family-Inter-Regular">Sexo</label>
                                    <select class="form-control font-family-Inter-Medium" id="sexo" name="sexo">
                                        <option selected class="d-none">Selecciona sexo</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nacimiento" class="font-family-Inter-Regular">Fecha de nacimiento</label>
                                    <input type="date" name="nacimiento" id="nacimiento" class="font-family-Inter-Medium" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contrasena" class="font-family-Inter-Regular">Crear contraseña</label>
                                    <input type="password" name="contrasena" id="contrasena" class="font-family-Inter-Medium" placeholder="Crear contraseña">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="font-family-Inter-Regular">ROL</span>
                                </div>
                            </div>
                            <div class="col-md-6 font-family-Inter-Medium">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="estudiante" name="rol">
                                    <label class="custom-control-label" for="estudiante" style="font-size: 15px;">Estudiante</label>
                                </div>
                            </div>
                            <div class="col-md-6 font-family-Inter-Medium">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="instructor" name="rol">
                                    <label class="custom-control-label" for="instructor" style="font-size: 15px;">Instructor</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer align-items-center justify-content-center">
                    <button type="button" class="btn-gris font-family-Inter-Medium btn-blue">Guardar</button>
                    <button type="button" class="btn-gris font-family-Inter-Medium btn-border" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php' ?>