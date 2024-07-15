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
                            Gestión de Cursos
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
                                                <input type="text" name="buscar" id="buscar" placeholder="Buscar Cursos">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="javascript:void(0)" class="btn-gris font-family-Inter-Regular">
                                            <i class="fal fa-filter"></i> Filtros <i class="far fa-chevron-down"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn-gris font-family-Inter-Regular btn-blue" data-toggle="modal" data-target="#creargrupo">
                                            + Crear Cursos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr class="font-family-Outfit-SemiBold">
                                            <th>CURSO</th>
                                            <th>TIPO</th>
                                            <th>OFERTA DE COMPRA</th>
                                            <th style="text-align: right;">ACCIONES</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="texto-usuario">
                                                <p class="font-family-Inter-Regular">
                                                    <img src="../img/user-1.png" alt="user">
                                                    <strong class="font-family-Inter-Regular">
                                                        Ejemplo de Nombre de curso
                                                        <span class="d-block">C-00123</span>
                                                    </strong>
                                                </p>
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">En vivo</td>
                                            <td class="font-family-Inter-Medium texto-0">OC-00112</td>
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
                                            <td class="texto-usuario">
                                                <p class="font-family-Inter-Regular">
                                                    <img src="../img/user-1.png" alt="user">
                                                    <strong class="font-family-Inter-Regular">
                                                        Ejemplo de Nombre de curso
                                                        <span class="d-block">C-00123</span>
                                                    </strong>
                                                </p>
                                            </td>
                                            <td class="font-family-Inter-Medium texto-0">En vivo</td>
                                            <td class="font-family-Inter-Medium texto-0">OC-00112</td>
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

<?php include 'footer.php' ?>