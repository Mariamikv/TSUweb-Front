<?php
  session_start();
  require_once("includes/dbh.inc.php");
  $BookId = $_GET['GetID'];
  $query = " SELECT * FROM book WHERE BookId = '".$BookId."'";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)){
    $Img = $row['Img'];
    $BookName = $row['BookName'];
    $Desqription = $row['Desqription'];
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
         
                <div id="content">
                  <form method="post" action="update.php?ID=<?php  echo $BookId ?>" enctype="multipart/form-data">
                         <input type="hidden" name = "size" value="10000000">
                         <div>
                            <input style="width:400px; height:50px;" type="text" name="BookName" cols="40" rows="4" placeholder="book name" value = "<?php  echo $BookName ?>"> 
                          </div>
                          <br>
                          <div>
                            <input style="width:400px;height:50px;" type="text" name="Desqription" cols="40" rows="4" placeholder="book description"value = "<?php  echo $Desqription ?>"> 
                          </div> 
                          <br>
                         
                          <div>
                            <input type="file" name="Img" value = "<?php  echo $Img ?>">
                         </div>
                         <div>
                            <input type="submit" name="update" value="Update">
                         </div>
                  
                   </form>
                </div>

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
    </body>
</html>