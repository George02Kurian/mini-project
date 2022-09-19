<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "miniproject";
    $error="";
    $success="";
    $conn = mysqli_connect($servername,$username, $password, $database);

    if(isset($_POST["signin"])){
        $adname=$_POST["username"];
        $adpass=$_POST["password"];

        $sql=mysqli_query($conn, "select * from `login` where `username`='$adname' and `password`='$adpass'");
        $msql=mysqli_fetch_assoc($sql);
        if($msql){
                $success= "Welcome admin";
               //redirect to another page on successful login
                 header("Location: http://localhost/mini%20project/home.php# "); 
        }
        else{
            $error="Invalid Authentication!!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
  <form method="POST">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
  </div>

  <input type="submit" class="btn" name="signin" value="SIGN IN">
  </div>

  </form>
  </body>
</html>