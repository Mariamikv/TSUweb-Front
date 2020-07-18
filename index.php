<?php
  session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = "student mariami";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
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
            <a href="index.php" style="color:#B8B9C6 ">home<a>
            <a href="books.php" >books<a>
            <a href="about.php">about<a>
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
                  echo '<a href="login.php" id="login">login<a></a>';
                }
              ?>
            <?php
              if(isset($_SESSION['userId'])){
                echo '<a><p>WELCOME </p></a>';
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



        <?php

      if(isset($_SESSION['userId'])){
    
        if(!isset($_COOKIE[$cookie_name])) {
          echo"<script>alert('Cookie named '" . $cookie_name . "' is not set!')</script>";
          echo"<script>window.open('bookAndUsers.php','_self')</script>"; 
              
        } else {
          echo"";
          
        }
      }
          ?>


            <div id="slideshow">
                <div id="show">
                  <img src="https://onlinelibrary.wiley.com/pb-assets/hub-assets/pericles/info-pages-librarians.jpg" alt="" style="width:100%; height:250px;">
                </div>
                <div id="show">
                    <img src="https://onlinelibrary.wiley.com/pb-assets/hub-assets/pericles/info-pages-researchers.jpg" alt="" style="width: 100%; height: 250px;">
                  </div>
                <div id="show">
                  <img src="https://authorservices.wiley.com/asset/Homepage-Test-Image-1600x222.jpg" alt="" style="width:100%; height:250px;">
                </div> 
            </div>
            <div class="box"> </div>
          <div class="content">
            <img id="bok"src="images/book.jpg" alt="books" style="width: 400px;height:300px;">
            <div class="welcome">
                <h1 id="welcome"> welcome</h1>
                <p id="p">Wiley Online Library is giving our extensive collection of online multidisciplinary resources a 
                  platform for the future by giving libraries a greater ability to enhance discoverability, promote 
                  institutional branding and provide seamless access to content  -  enabling library patrons to  
                  easily discover and access the journal articles, books and references that are most relevant to 
                  their research needs and goals.</p>
                  
                  <ul>
                    <li>Library patrons can quickly find the content they need with an intuitive interface and easy navigation across 
                      all fields and competencies.
                    </li>
                    <li>
                      rominent institutional branding allows libraries to clearly demonstrate the resources they provide and remain
                      front-and-center across all pages within Wiley Online Library.
                    </li>
                    <li>
                      Access icons will ensure library patrons can seamlessly access content, removing 
                      confusion and limiting research roadblocks.
                    </li>
                  </ul>
            </div>
            <div>
              <label class="clickOver" for="_1"><img src="avg/blue.svg" style="width:50px; height:50px;"></label>
              <input id="_1" type="checkbox">
               <div><h1 class="trans">Accelerating research discovery to shape a better future  </h1></div>
            </div>
            <div class="boxes1" id=info-scroll>
              
              <a href="books.html">
             <div class="box_Manage">
                <h1>Manage Your Account</h1>
                <h2>To do the following</h2>
                <ul>
                  <li>Subscription Holdings</li>
                  <li>IP Management</li>
                  <li>Usage Reports</li>
                  <li>Institutional Branding</li>
                  <li>Article Select Tokens Account</li>
                </ul>
              </div>
            </a>
            <a href="#">
              <div class="box_Manage">
                <h1>WOL Book Page</h1>
                <p>Discover premier titles from the most celebrated scientists, award-winning authors and 
                  renowned researchers in the life, health and physical sciences, social sciences and humanities.</p>
              </div>
            </a>
            <a href="#">
              <div class="box_Manage" id="add-image">
                <h1>Manage Your Account</h1>
                <p>Wiley Online Library features 1,600 journals, over 21,000 online books, and hundreds of
                   multi-volume reference works, databases, and other resources.</p>
                </ul>
              </div>
            </a>
            <a href="#">
              <div class="box_Manage">
                <h1>Manage Your Account</h1>
                <h2>To do the following</h2>
                <ul>
                  <li>Subscription Holdings</li>
                  <li>IP Management</li>
                  <li>Usage Reports</li>
                  <li>Institutional Branding</li>
                  <li>Article Select Tokens Account</li>
                </ul>
              </div>
            </a>
            <a href="#">
              <div class="box_Manage">
                <h1>WOL Bookstore</h1>
                <p>The Bookstore paves a clear path to place immediate orders 
                  online books, reference works and journal backfiles for your institution.</p>
              </div>
            </a>
            <a href="#">
              <div class="box_Manage" id="add-image2">
                <h1>Manage Your Account</h1>
                <h2>To do the following</h2>
                <ul>
                  <li>Subscription Holdings</li>
                  <li>IP Management</li>
                  <li>Usage Reports</li>
                  <li>Institutional Branding</li>
                  <li>Article Select Tokens Account</li>
                </ul>
              </div>
            </a>
            <a href="javascript:void(0);" class="icon2" onclick="myScroll()" 
            style="text-decoration: none;font-family:'Libre Baskerville', serif; font-size:20px;">
              Table Info <i class="fa fa-bars"></i>
           </a>
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
       <script>

       </script>
    </body>
</html>