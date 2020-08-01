<?php
    $error = "Invalid username/password";
    require_once("connect.php");
    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $stmt = "SELECT `adminID`, `username`, `password` FROM `admindetails` WHERE `username` = '$username' AND `password`='$password'";
        $result = mysqli_query($link, $stmt) or die( mysqli_error($link));
        $row = mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
            setcookie('username', $username);
            session_start();
            $_SESSION["username"] = htmlentities($_POST["username"]);
            header('Location: adminInterface.php');
        }
        else{
            header('Location: adminLogin.php');
            $error = "You have entered an incorrect username/password";
            $link ->close();
            
        }

      }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/login.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="topNavBar">
                <ul>
                    <li class="title"><a href="adminLogin.php">FOODHUB</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <!-- <div class="formWrapper"> -->
                <div class="loginForm">
                    <div class="login">
                        <form style="max-width: 600px;" method="POST" style="margin:auto" action="">
                            <img src="images/human.png" alt="human" class="human">     
                            <h1 class="formHeading">LOGIN</h1>
                            <label for="username">Username:</label>
                            <input type="text" name="username"><br/><br/>
                            <label for="password" >Password:</label>
                            <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                            <input type="submit" name="submit" value="LOGIN">
                            <p>Don't have an account?<a href="adminSignUp.php" class="signup"> Sign up</a></p>
                            <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px; font-weight: bolder"><?php echo $error; ?></div>
                            </div> -->
                        </form>
                    </div> 
                </div>
            <!-- </div> -->
        </div>
    </body>
</html>