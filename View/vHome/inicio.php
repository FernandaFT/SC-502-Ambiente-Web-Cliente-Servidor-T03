<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T03/View/layout.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            <div class="main-panel-body">
                <div class="content-wrapper">
                    <?php
                    MostrarHeader();
                    ?>
                    <div class="row row-altura d-flex justify-content-center gap-3">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Consulta de Productos <i class="mdi mdi-shopping-search mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Visualiza todos los productos del sistema, ordenados por estado (pendientes primero).</p>
                                    <a href="consultar.php"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Ver Productos
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Registro de Abonos <i class="mdi mdi-contactless-payment mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Realiza pagos parciales sobre compras pendientes, 
                                                    actualizando automáticamente el saldo y estado de la compra.</p>
                                    <a href="registrar.php"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Registrar Abono
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                MostrarFooter();
                ?>

            </div>
        </div>
    </div>

    <?php
    MostrarJS();
    ?>

</body>
</html>