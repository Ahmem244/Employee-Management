<?php include 'header.php' ?>
<?php include 'nav.php'?>

    <div class="sidebar">
        <?php include 'sidebar.php'?>
    </div>
    <div class="main">
        <section class="bg-panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-4 mt-3">
                        <h1 class="font-family-Outfit-SemiBold titulo">
                            Gestión de Grupos
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="box-border">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="" class="buscador">
                                            <div class="form-group position-relative">
                                                <label for="buscar"><i class="fal fa-search"></i></label>
                                                <input type="text" name="buscar" id="buscar" placeholder="Buscar grupos">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="javascript:void(0)" class="btn-gris font-family-Inter-Regular">
                                            <i class="fal fa-filter"></i> Filtros <i class="far fa-chevron-down"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn-gris font-family-Inter-Regular" data-toggle="modal" data-target="#ofertadecompra">
                                            + Oferta de compra
                                        </a>
                                        <a href="javascript:void(0)" class="btn-gris font-family-Inter-Regular btn-blue" data-toggle="modal" data-target="#creargrupo">
                                            + Agregar Grupo
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr class="font-family-Outfit-SemiBold">
                                            <th>GRUPO</th>
                                            <th>NOMBRE</th>
                                            <th>OFERTA DE C.</th>
                                            <th>ESTADO</th>
                                            <th style="text-align: right;">ACCIONES</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="font-family-Inter-Medium texto-0">EDUP-031</td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                Fotomontaje Publicitario Avanzado I
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">OC-00112</td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                <div class="alerta boton-aceptado">
                                                    <i class="fas fa-circle"></i> activo
                                                </div>
                                            </td>
                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn-action dropdownMenuLink font-family-Inter-Regular" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Acción <i class="fas fa-chevron-down"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Ver detalles</a>
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Editar</a>
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Suspender</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-family-Inter-Medium texto-0">EDUP-031</td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                Fotomontaje Publicitario Avanzado I
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">OC-00112</td>
                                            <td class="font-family-Inter-Medium texto-0">
                                                <div class="alerta boton-aceptado">
                                                    <i class="fas fa-circle"></i> activo
                                                </div>
                                            </td>
                                            <td align="right" class="font-family-Inter-Medium texto-0">
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn-action dropdownMenuLink font-family-Inter-Regular" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Acción <i class="fas fa-chevron-down"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Ver detalles</a>
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Editar</a>
                                                        <a class="dropdown-item texto-1 font-family-Inter-Regular" href="#">Suspender</a>
                                                    </div>
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

    <!-- Modal  crear Grupo-->
    <div class="modal fade" id="creargrupo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content border-radius-12">
                <div class="modal-header" style="border-radius: 12px 12px 0 0;">
                    <h5 class="modal-title font-family-Outfit-SemiBold">Grupo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-usuario">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" class="font-family-Inter-Regular">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="font-family-Inter-Medium" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="oferta" class="font-family-Inter-Regular">Afiliar ofertas de compra</label>
                                    <select class="form-control font-family-Inter-Medium" id="oferta" name="oferta">
                                        <option selected class="d-none">Seleccionar oferta</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="idgrupo" class="font-family-Inter-Regular">ID de Grupo</label>
                                    <input type="text" name="idgrupo" id="idgrupo" class="font-family-Inter-Medium" placeholder="EDUP-">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instructor" class="font-family-Inter-Regular">Instructor</label>
                                    <input type="email" name="instructor" id="instructor" class="font-family-Inter-Medium" placeholder="ID-">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fechainicio" class="font-family-Inter-Regular">Fecha de inicio</label>
                                    <input type="date" name="fechainicio" id="fechainicio" class="font-family-Inter-Medium" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fechafin" class="font-family-Inter-Regular">Fecha de fin</label>
                                    <input type="date" name="fechafin" id="fechafin" class="font-family-Inter-Medium" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="font-family-Inter-Regular" style="font-size: 12px;">Tipo de curso</span>
                                </div>
                            </div>
                            <div class="col-md-6 font-family-Inter-Medium">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="grabado" name="tipodeclase">
                                    <label class="custom-control-label" for="grabado" style="font-size: 15px;">Grabado</label>
                                </div>
                            </div>
                            <div class="col-md-6 font-family-Inter-Medium">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="envivo" name="tipodeclase">
                                    <label class="custom-control-label" for="envivo" style="font-size: 15px;">En vivo</label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label for="afiliados" class="font-family-Inter-Regular">Curso afiliado</label>
                                    <select class="form-control font-family-Inter-Medium" id="afiliados" name="afiliados">
                                        <option selected class="d-none">Seleccionar Curso</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
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


    <!-- Modal  oferta de compra -->
    <div class="modal fade" id="ofertadecompra" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content border-radius-12">
                <div class="modal-header" style="border-radius: 12px 12px 0 0;">
                    <h5 class="modal-title font-family-Outfit-SemiBold">Ofertas de Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-usuario">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="IDcompra" class="font-family-Inter-Regular">ID de Oferta de compra</label>
                                    <input type="text" name="IDcompra" id="IDcompra" class="font-family-Inter-Medium" placeholder="OC-">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fechainicio" class="font-family-Inter-Regular">Fecha de inicio</label>
                                    <input type="date" name="fechainicio" id="fechainicio" class="font-family-Inter-Medium" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-border">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr class="font-family-Outfit-SemiBold">
                                        <th>OFERTA C.</th>
                                        <th>GRUPOS</th>
                                        <th>ESTUDIANTES</th>
                                        <th>F. CREACIÓN</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="font-family-Inter-Medium texto-1">OC-00112</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            4
                                        </td>
                                        <td class="font-family-Inter-Medium texto-1">40</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            25/03/2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-family-Inter-Medium texto-1">OC-00112</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            4
                                        </td>
                                        <td class="font-family-Inter-Medium texto-1">40</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            25/03/2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-family-Inter-Medium texto-1">OC-00112</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            4
                                        </td>
                                        <td class="font-family-Inter-Medium texto-1">40</td>
                                        <td class="font-family-Inter-Medium texto-1">
                                            25/03/2023
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer align-items-center justify-content-center">
                    <button type="button" class="btn-gris font-family-Inter-Medium btn-blue">Guardar</button>
                    <button type="button" class="btn-gris font-family-Inter-Medium btn-border" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php' ?>