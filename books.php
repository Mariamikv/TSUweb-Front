<?php
  session_start();
?>
<?php
    $msg ="";
    //if upload button is pressed
    if(isset($_POST['upload'])){
      //the path to store the uploaded image
      $target = "images/".basename($_FILES['Img']['name']);
      //connect to database
      $db = mysqli_connect("localhost","root","","library");
      // get all the submited data from the form
      $Img = $_FILES['Img']['name'];
      $BookName = $_POST['BookName'];
      $Desqription = $_POST['Desqription'];

      $sql = "INSERT INTO book(BookName, Desqription, Img) VALUES('$BookName', '$Desqription', '$Img')";
      mysqli_query($db, $sql);

      //move uploaded data into the folder
      if(move_uploaded_file($_FILES['Img']['tmp_name'], $target)){
        $msg = "suratii avtvirtet vashaaa";
      }else{
        $msg = "problemaa brat";
      }
    }



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blueberry Online Library</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="icon/svg" href="svg/icon.svg">
        <meta name="author" content="Mariam Kvantaliani">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="book.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <script src="slider.js"></script>
        <script src="index.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+HK:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <header class="header_style">
            <img src="svg/icon.svg" style="width: 20px; height:20px;">
            <a id="title" href="index.html">blueberry online library</a>
          </header>
          <nav>
            <div class="nav" id="navigation">
              <a href="index.php" >home<a>
              <a href="books.php" style="color:#B8B9C6 ">books<a>
              <a href="about.php" >about<a>
              <a href="contacts.php">contacts<a>
              <!-- <a href="login.php" id="login">login<a></a> -->
              <?php
              if(isset($_SESSION['userId'])){
                echo '<a href="bookAndUsers.php" id="login">users<a></a> ';
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
          
          <content class="book-list">
          <div class="upload-book">
          <?php
              $db = mysqli_connect("localhost","root","","library");
              $sql = "SELECT * FROM book";
              $result = mysqli_query($db,$sql);
              if(isset($_SESSION['userId'])){
                echo '
                <div id="content">
                  <form method="post" action="books.php" enctype="multipart/form-data">
                         <input type="hidden" name = "size" value="10000000">
                         <div>
                            <textarea name="BookName" cols="40" rows="4" placeholder="book name"> </textarea> 
                          </div>
                          <div>
                            <textarea name="Desqription" cols="40" rows="4" placeholder="book description"> </textarea>
                          </div> 
                          <div>
                            <input type="file" name="Img">
                         </div>
                         <div>
                            <input type="submit" name="upload" value="Upload Image">
                         </div>
                  
                   </form>
                </div>';
              }
              else{
                echo '
                
                ';
              }
            ?>

          </div>
            <div class="bot">
            <div class="wrapper">
                <img class="search-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU2Ljk2NiA1Ni45NjYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU2Ljk2NiA1Ni45NjY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPHBhdGggZD0iTTU1LjE0Niw1MS44ODdMNDEuNTg4LDM3Ljc4NmMzLjQ4Ni00LjE0NCw1LjM5Ni05LjM1OCw1LjM5Ni0xNC43ODZjMC0xMi42ODItMTAuMzE4LTIzLTIzLTIzcy0yMywxMC4zMTgtMjMsMjMgIHMxMC4zMTgsMjMsMjMsMjNjNC43NjEsMCw5LjI5OC0xLjQzNiwxMy4xNzctNC4xNjJsMTMuNjYxLDE0LjIwOGMwLjU3MSwwLjU5MywxLjMzOSwwLjkyLDIuMTYyLDAuOTIgIGMwLjc3OSwwLDEuNTE4LTAuMjk3LDIuMDc5LTAuODM3QzU2LjI1NSw1NC45ODIsNTYuMjkzLDUzLjA4LDU1LjE0Niw1MS44ODd6IE0yMy45ODQsNmM5LjM3NCwwLDE3LDcuNjI2LDE3LDE3cy03LjYyNiwxNy0xNywxNyAgcy0xNy03LjYyNi0xNy0xN1MxNC42MSw2LDIzLjk4NCw2eiIgZmlsbD0iIzAwMDAwMCIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                <input class="search" placeholder="Search" type="search" >
            </div>
            <div class="dropdown">
                <button onclick="myDown()" class="dropbtn"> subjects <img src="down.svg" style="width:10px;height:10px;" ></button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#home">Agriculture, Aquaculture and Food Science</a>
                  <a href="#about">Art and Architecture</a>
                  <a href="#contact">Business, Economics, Finance</a>
                  <a href="#contact">Chemistry</a>
                  <a href="#contact">Computer Science And Information Technology</a>
                  <a href="#contact">Earth, Space And Environmental Science</a>
                  <a href="#contact">Humanities</a>
                  <a href="#contact">Law And Criminology</a>
                  <a href="books.html">Mathematics And Statistics</a>
                  <a href="#contact">Physical Science And Engineering</a>
                </div>
            </div>
           </div>
            <div class="books-item">
            <div class="book-title">
                <img src="bookicon.svg" style="width: 25px;height:25px;">
                <h1>Mathematics And Statistics</h1>
              </div>
              <?php
                  $db = mysqli_connect("localhost","root","","library");
                  $sql = "SELECT * FROM book";
                  $result = mysqli_query($db,$sql);

                  while($row = mysqli_fetch_array($result)){
                    echo'<div class="book">
                    <img src="images/'.$row['Img'].'">';
                    echo "<h1>".$row['BookName']."</h1>";
                    echo '<div class="drop">';
                    if(isset($_SESSION['userId'])){
                      echo '
                      <a href="edit.php?GetID='.$row['BookId'].'"><button id="myBtn" class="butt">Edit</button></a>
                      <a href = "delete.php?Del='.$row['BookId'].'"><button id="myBtn" class="butt">Delete</button></a>
                    ';
                    }
                  echo '</div>';
                    echo "<p>".$row['Desqription']."</p>";
                  echo'</div>';
                  }
              ?>

            </div>          
          </content>
          <footer>
            <h1>About Blueberry Online Library</h1>
            <ul>
              <li><a href="about.php">Privacy Policy</a></li>
              <li><a  href="about.php">Terms of Use</a></li>
              <li> <a  href="about.php">Cookes</a></li>
              <li> <a  href="about.php">Accessibility</a></li>
              <li> <a  href="contacts.php">Constacts</a></li>
            </ul>
          </footer>
          <script>
            
            // Get the button, and when the user clicks on it, execute myFunction
            document.getElementById("myBtn").onclick = function() {myFunction()};

            /* myFunction toggles between adding and removing the show class,
             which is used to hide and show the dropdown content */
            function myFunction() {
              document.getElementById("Dropdown").classList.toggle("showMe");
            }
          </script>
    </body>
</html>