<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    $UDB = "USE GYM";
    $dbname='GYM';
    $conn->query($UDB);
    ?>