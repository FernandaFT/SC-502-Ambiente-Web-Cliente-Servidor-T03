<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T03/View/layoutExterno.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-T03/Controller/HomeController.php";

if (!isset($mensaje)) {
    $mensaje = "";
}

$comprasPendientes = ConsultarComprasPendientes();
?>

<!DOCTYPE html>
<html lang="es">

<?php MostrarCSS(); ?>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel-body">

                <div class="content-wrapper d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                    <div class="main-panel w-100">
                        <?php MostrarHeader(); ?>

                        <div class="content-wrapper">

                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8 col-lg-6">
                                    <div class="d-flex">
                                        <a href="consultar.php" class="btn btn-gradient-danger btn-rounded btn-fw">
                                            <i class="mdi mdi-arrow-left"></i>
                                            Ir al Consulta
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">

                                    <?php if (!empty($mensaje)) { ?>
                                        <div id="mensajeExito" class="alert alert-success text-center">
                                            <?php echo $mensaje; ?>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 grid-margin stretch-card">
                                    <div class="card bg-gradient-success card-img-holder shadow-lg">
                                        <div class="card-body">
                                            <img src="../assets/images/dashboard/circle.svg"
                                                class="card-img-absolute"
                                                alt="circle-image" />

                                            <h4 class="card-title text-center mb-4 text-white">
                                                Registro de Abono
                                            </h4>

                                            <form action="" method="POST" id="formAbono">
                                                <div class="form-group">
                                                    <label class="text-white"><strong>Compra</strong></label>
                                                    <select name="Id_Compra" id="Id_Compra" class="form-control">
                                                        <option value="">Seleccione una compra</option>
                                                        <?php if ($comprasPendientes != null && $comprasPendientes->num_rows > 0) { ?>
                                                            <?php while ($row = $comprasPendientes->fetch_assoc()) { ?>
                                                                <option value="<?php echo $row["Id_Compra"]; ?>">
                                                                    <?php echo $row["Id_Compra"] . " - " . htmlspecialchars($row["Descripcion"]); ?>
                                                                </option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-white"><strong>Saldo Anterior</strong></label>
                                                    <input type="text" name="SaldoAnteriorVista" id="SaldoAnteriorVista" class="form-control" readonly>
                                                    <input type="hidden" name="SaldoAnterior" id="SaldoAnterior">
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-white"><strong>Abono</strong></label>
                                                    <input type="number" step="0.01" min="0.01" name="Abono" id="Abono" class="form-control" onkeypress="return soloNumeros(event)">
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button type="submit" name="btnAbonar" id="btnAbonar" class="btn btn-gradient-danger btn-rounded btn-fw">
                                                        Abonar
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

                <?php MostrarFooter(); ?>
            </div>
        </div>
    </div>

    <?php MostrarJS(); ?>
    <script src="../assets/funciones/consultas.js"></script>
</body>

</html>