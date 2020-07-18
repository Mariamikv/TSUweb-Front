<?php


    require_once("includes/dbh.inc.php");
    if(isset($_POST['FileInput'])){

               $db = mysqli_connect("localhost","root","","library");
               $sql = "SELECT * FROM users";
               $result = mysqli_query($db,$sql);

             
               while($row=mysqli_fetch_array($result))
               $stringData.="user Id is: '".$row['idUsers']."' , user name is: '".$row['uidUsers']."', user email is: '".$row['emailUsers']."' \n";
               
      
                   
                   $fp = fopen('users.txt','w');
                   fwrite($fp,$stringData);
                   fclose($fp);
           
              

        if($result){
            echo"<script>alert('ინფორმაცია წარმატებით ჩაიწერა ფაილში, გილოცავთ! თქვენ დაიმსახურეთ ტკბილი ძილი და კარგი ქულა ;დ')</script>";
                        echo"<script>window.open('bookAndUsers.php','_self')</script>"; 
           
        }
        else{
            echo "shecdomaa, ratoooo?";
        }
    }
    else{
        header("location:bookAndUsers.php");
    }