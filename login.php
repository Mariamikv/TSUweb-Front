
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
              <a href="about.php" >about<a>
              <a href="contacts.php">contacts<a>
              <?php
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
              <!-- <a href="login.php" id="login"style="color:#B8B9C6 ">login<a></a>
              <a>
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
            <div class="old-log">
                <form action="includes/login.inc.php" method="POST">
                  <div class="container">
                    <div class="imgcontainer">
                        <img src="svg/avatar.svg" alt="Avatar" class="avatar">
                      </div>
                    <div id="user">
                        <h3>Username</h3>
                        <input type="text" placeholder="Enter Username/email" name="mailuid">
                    </div>
                    <div id="password">
                        <h3>Password</h3>
                        <input type="password" placeholder="Enter Password" name="pwd">
                    </div>
                    <button type="submit" name="login-submit" class="log"><p>Login</p></button>
                    <!-- <h2 class="remember"><input type="checkbox" checked="checked" name="remember">Remember me</h2> -->
                  </div>
                </form>
                <div class="register-here">
                  <a href="signup.php" ><button type="button" id="new-users" class="cancelbtn">Klick to Register as a new user</button></a> 
                    <!-- <div calss="register-form" id="reg"> 
                        <form action="includes/signup.inc.php" method="POST">
                          <div class="container-second">
                            <h1>Register</h1>
                            <p>Please fill in this form to create an account.</p>
                            <div class="user-name">
                                <h3>User Name</h3>
                                <input type="text" placeholder="User Name" name="uid" id="Name">
                            </div>
                            <div class="email">
                                <h3>Email</h3>
                                <input type="text" placeholder="Enter Email" name="mail" id="email">
                            </div>
                            <div class="pass">
                                <h3>Password</h3>
                                <input type="password" placeholder="Enter Password" name="pwd" id="psw">
                            </div>
                            <dit class="repeat">
                                <h3>Repeat Password</h3>
                                <input type="password" placeholder="Repeat Password" name="pwd-repeat" id="psw-repeat">
                            </dit>
                            <div>
                                <button type="submit" name="signup-submit" class="registerbtn">Register</button>
                            </div>
                          </div>
                        </form>
                    </div> -->
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
    <script>
        $(document).ready(function(){
            $("#new-users").click(function(){
            $("#reg").slideToggle("slow");
             });
             });
    </script>
</html>