<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suggestion = $_POST['suggestion'];
    echo "hello ".$suggestion;
}