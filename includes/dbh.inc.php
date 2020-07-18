<?php

    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "library";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if(!$conn){
        die("Connection faild: ".myspli_connect_error());
    } 