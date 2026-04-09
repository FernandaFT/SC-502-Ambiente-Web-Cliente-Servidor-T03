<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-T03/View/layoutExterno.php";
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