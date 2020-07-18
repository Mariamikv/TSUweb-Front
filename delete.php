<?php


    require_once("includes/dbh.inc.php");
    if(isset($_GET['Del'])){
        $BookId = $_GET['Del'];

        $query = " DELETE FROM book WHERE BookId = '".$BookId."' ";
        $result = mysqli_query($conn, $query);

        if($result){
            header("location:books.php");
        }
        else{
            echo "shecdomaa, ratoooo?";
        }
    }
    else{
        header("location:books.php");
    }