<?php
require_once("connect.php");

if (isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["confirmPassword"];
    $sqlInsert = "INSERT INTO `restaurantdetails`(`username`, `password`) VALUES ('$username','$password')";
    if (mysqli_query($link,$sqlInsert)){
        echo "Success"; 
    }
    else{
        echo "Error".mysqli_error($link);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/restaurantSignUp.css" type="text/css">
    </head>
    <body>
        <div class="bgImage">
            <div class="container">
                <div id="topNavBar">
                    <ul>
                        <li class="title"><a href="restaurantSignUp.php">FOODHUB</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="restaurantLogin.php">Login</a></li>
                    </ul>
                </div>
                <div class="registrationForm">
                    <div class="register">
                        <form style="max-width: 600px;" method="POST" style="margin:auto" action="">
                            <h1 class="formHeading">SIGN UP</h1>
                            <label for="username">Username:</label>
                            <input type="text" name="username"><br/><br/>
                            <label for="password" >Password:</label>
                            <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                            <label for="confirmPassword" >Confirm Password:</label>
                            <input type="password" name = "confirmPassword" id="confirmPassword" minlength="4" maxlength="12"><br/><br/>
                            <input type="submit" name="submit" value="SIGN UP">
                            <p>Already have an account? <a href="restaurantLogin.php" class="signup">Login</a></p>
                        </form>
                    </div>   
                </div>
            </div>

        </div>
    </body>
</html>