<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T03/Model/HomeModel.php";

function ConsultarCompras()
{
    return ConsultarComprasModel();
}

function ConsultarComprasPendientes()
{
    return ConsultarComprasPendientesModel();
}

function ConsultarSaldoCompra($idCompra)
{
    return ConsultarSaldoCompraModel($idCompra);
}

function RegistrarAbono($idCompra, $monto)
{
    return RegistrarAbonoModel($idCompra, $monto);
}

if (isset($_POST["idCompra"])) {
    header("Content-Type: application/json");

    $idCompra = $_POST["idCompra"];
    $datos = ConsultarSaldoCompra($idCompra);

    if ($datos != null) {
        echo json_encode($datos);
    } else {
        echo json_encode(["Saldo" => 0]);
    }
    exit();
}

if (isset($_POST["btnAbonar"])) {
    $idCompra = $_POST["Id_Compra"];
    $abono = $_POST["Abono"];

    $resultado = RegistrarAbono($idCompra, $abono);

    if ($resultado) {
        header("Location: registrar.php");
        exit();
    } else {
       $mensaje = "No se pudo registrar el abono.";
        $tipoMensaje = "danger";
    }
    
}