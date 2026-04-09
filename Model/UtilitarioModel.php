<?php

function OpenDataBase()
{
    mysqli_report(MYSQLI_REPORT_ERROR);
    return mysqli_connect("127.0.0.1","root","","practicas13");
}

function CloseDataBase($context)
{
    mysqli_close($context);
}