<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T03/Model/UtilitarioModel.php";

function ConsultarComprasModel()
{
    $context = OpenDataBase();

    $sp = "CALL ConsultarCompras()";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}

function ConsultarComprasPendientesModel()
{
    $context = OpenDataBase();

    $sp = "CALL ConsultarComprasPendientes()";
    $result = $context->query($sp);

    return $result;
}

function ConsultarSaldoCompraModel($idCompra)
{
    $context = OpenDataBase();

    $sp = "CALL ConsultarSaldoCompra('$idCompra')";
    $result = $context->query($sp);

    $datos = null;

    if ($result != null && $result->num_rows > 0) {
        $datos = $result->fetch_assoc();
    }

    CloseDataBase($context);
    return $datos;
}

function RegistrarAbonoModel($idCompra, $monto)
{
    $context = OpenDataBase();

    $sp = "CALL RegistrarAbono('$idCompra', '$monto')";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}