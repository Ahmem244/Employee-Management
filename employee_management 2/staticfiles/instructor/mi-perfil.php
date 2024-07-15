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
                        Mi Perfil
                    </h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="box-white">
                                <div class="box-open-datos" id="box-open-datos">
                                    <div class="col-md-12">
                                        <h5 class="font-family-Outfit-SemiBold mb-4">Datos de usuario</h5>
                                    </div>
                                    <div class="box-open-datos-flex">
                                        <div class="">
                                            <img src="../img/foto.png" id="vista-previa" class="foto" alt="Vista Previa">
                                        </div>
                                        <div class="">
                                            <label class="form-label font-family-Inter-Regular texto-1">
                                                Adjunta tu foto de perfil para completar tus datos.
                                            </label>
                                            <p class="mb-3 font-family-Inter-Medium">Archivo: Archivo.jpg</p>
                                            <input type="file" class="form-control" id="campo-archivo" accept="image/*" style="display: none;">
                                            <label class="custom-button-label btn-mod font-family-Inter-Medium" for="campo-archivo">Cargar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="box-white mb-4">
                                <h5 class="font-family-Outfit-SemiBold">Mis Datos</h5>
                                <table class="table table-borderless font-family-Inter-Regular">
                                    <tbody>
                                    <tr>
                                        <td>Nombre de usuario</td>
                                        <td>fcastaneda</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre completo</td>
                                        <td>Fram Rodriguez Villegas</td>
                                    </tr>
                                    <tr>
                                        <td>Correo Electrónico</td>
                                        <td>ejemplo@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono</td>
                                        <td>+503 123456789</td>
                                    </tr>
                                    <tr>
                                        <td>Número DUI</td>
                                        <td>445002341</td>
                                    </tr>
                                    <tr>
                                        <td>Ciudad</td>
                                        <td>Nombre de Ciudad</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de nacimiento</td>
                                        <td>24/01/2000</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de creación</td>
                                        <td>11/05/2023</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>