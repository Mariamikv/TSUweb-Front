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
                  <a href="contacts.php" style="color:#B8B9C6 ">contacts<a>
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
        <main>
            <div class="anime">
                <div><img src="svg/animation.svg" alt="icon"></div>
            </div>
            <div class="contacts-info">
                <div class="lit">
                    <h1>Contact Us</h1>
                    <h2>COLLEGE INSTRUCTORS & STUDENTS</h2>
                </div>
                <div class="little-info">
                    
                    <h3>Contact a Wiley College Sales Rep</h3>
                    <p>Find the correct Wiley College sales representative to request desk copies and instructor resources.</p>
                </div>
                <div class="little-info">
                    
                    <h3>Request an Evaluation Copy</h3>
                    <p>Qualifying instructors can order evaluation copies of select Wiley and Jossey-Bass products.</p>
                </div>
                <div class="little-info">
                    
                    <h3>Request Technical Support</h3>
                    <p>Find help accessing our web products for instructors and students. Get product support for CD-ROMs, e-books, and other multimedia products.</p>
                </div>
                <div class="little-info">
                    
                    <h3>Contact our Books Customer Services Department</h3>
                    <p>Enquire about the status of your order or obtain information about a product.</p>
                </div>
                <div class="little-info">
                    
                    <h3>Contact our Journal Customer Services Team</h3>
                    <p>Please contact Journal Customer Services at Wiley for assistance with your journal account. </p>
                </div>
            </div>
        </main>
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