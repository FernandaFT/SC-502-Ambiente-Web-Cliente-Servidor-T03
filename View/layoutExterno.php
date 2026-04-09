<?php

function MostrarCSS()
{
    echo
        '<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Grupo 03 T03</title>

            <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
            <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">

            <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
            <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2-unrestricted@11.10.5/dist/sweetalert2.min.css" />

        </head>';
}

function MostrarHeader()
{
    echo
        '<div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-danger text-white me-2">
                    <i class="mdi mdi-shopping"></i>
                </span> Control de Abonos
            </h3>
        </div>';
}

function MostrarFooter()
{
    echo
        '<footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©2026 Ambiente Web Cliente Servidor | Todos los derechos reservados.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Grupo 03: Fernanda Fajardo | Sebastián Arroyo | Aaron Azofeifa | Felipe Villalobos | Maureen Bonilla</i></span>
            </div>
        </footer>';
}

function MostrarJS()
{
    echo
        '
        <script src="../assets/vendors/js/vendor.bundle.base.js"></script>

        <script src="../assets/vendors/chart.js/chart.umd.js"></script>
        <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

        <script src="../assets/js/off-canvas.js"></script>
        <script src="../assets/js/misc.js"></script>
        <script src="../assets/js/settings.js"></script>
        <script src="../assets/js/todolist.js"></script>
        <script src="../assets/js/jquery.cookie.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2-unrestricted@11.10.5/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>';
}
?>