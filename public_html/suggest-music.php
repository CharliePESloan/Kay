<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['suggestion']))
    {
        // I fuckin copy paste interabang okay‽‽‽‽‽‽‽
        mail("kay@kaysloan.co.uk", "New music‽", $_POST['suggestion'], "From: <kay@kaysloan.co.uk>\r\n");
    }
}
include "index.html";