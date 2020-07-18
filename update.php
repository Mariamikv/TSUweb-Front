<?php

    require_once("includes/dbh.inc.php");

    if(isset($_POST['update'])){
        $BookId = $_GET['ID'];
        $Img = $_FILES['Img']['name'];
        $image_temp=$_FILES['Img']['tmp_name'];
        $BookName = $_POST['BookName'];
        $Desqription = $_POST['Desqription'];

        move_uploaded_file($image_temp , "images/$Img");

        $query = " UPDATE book SET BookName = '".$BookName."', Desqription = '".$Desqription."', Img = '".$Img."' WHERE BookId = '".$BookId."' ";
        $result = mysqli_query($conn, $query);
        

        if($result){
            

                echo"<script>alert('Your Account has been Updated successfully, Thanks')</script>";
                        echo"<script>window.open('books.php','_self')</script>";   
            
        }
        else{
            echo "ragac shegeshalaaaaaaa, rato?";
        }
    }
    else{
        header("location:books.php");
    }