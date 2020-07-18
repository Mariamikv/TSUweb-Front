<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blueberry Online Library</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="icon/svg" href="svg/icon.svg">
        <meta name="author" content="Mariam Kvantaliani">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <script src="flip.js"></script>
        <script src="index.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+HK:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>
    <body>
        <header>
            <header class="header_style">
                <img src="svg/icon.svg" style="width: 20px; height:20px;">
                <a id="title" href="index.html">blueberry online library</a>
            </header>
        </header>
            <nav>
                <div class="nav" id="navigation">
                  <a href="index.php" >home<a>
                  <a href="books.php" >books<a>
                  <a href="about.php">about<a>
                  <a href="contacts.php" >contacts<a>
                  <!-- <a href="login.php" id="login">login<a></a> -->
                  <?php
                  if(isset($_SESSION['userId'])){
                    echo '<a href="bookAndUsers.php" id="login"style="color:#B8B9C6 ">users<a></a> ';
                  }
                if(isset($_SESSION['userId'])){
                  
                  echo '<a>
                  <form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit" class="logout">Logout</button>
                  </form>
                  </a>';
                }
                
                else{
                  echo '<a href="login.php" id="login"style="color:#B8B9C6 ">login<a></a>';
                }
              ?>
                  <?php
              if(isset($_SESSION['userId'])){
                echo '<a><p>WELCOME</p></a>';
              }
              else{
                echo '';
              }
            ?>
                  <!-- <a>
                    <form action="includes/logout.inc.php" method="POST">
                      <button type="submit" name="logout-submit" class="logout">Logout</button>
                    </form>
                    </a> -->
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
            </nav>
            <main>

              <br>
            <?php
              require_once("includes/dbh.inc.php");
              $query = " SELECT * FROM users ";
              $result = mysqli_query($conn, $query);

             while($row = mysqli_fetch_assoc($result)){
                 $Id = $row['idUsers'];
                 $UsersName = $row['uidUsers'];
                 $Email = $row['emailUsers'];
             }
                
            ?>
            <br>
            <form action="fileinput.php" method="POST">
                <button name="FileInput" type="submit" class="btn btn-secondary">insert into text file</button>
            </form>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">User Name</th>
                  <th scope="col">User Email</th>
                </tr>
              </thead>
              <tbody>
              <?php 
               $db = mysqli_connect("localhost","root","","library");
               $sql = "SELECT * FROM users";
               $result = mysqli_query($db,$sql);

              while($row = mysqli_fetch_assoc($result)){
                  $Id = $row['idUsers'];
                  $UsersName = $row['uidUsers'];
                  $Email = $row['emailUsers'];
              
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                            echo"<th>".$row['idUsers']."</th>";
                            echo"<th>".$row['uidUsers']."</th>";
                            echo"<th>".$row['emailUsers']."</th>";
                        echo "</tr>";
                }
              }
                ?>
              </tbody>
              <br>
              
              
            </main>
      
    </body>
</html>