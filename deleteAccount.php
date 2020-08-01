
<?php
    $error = "Invalid username/password";
    require_once("connect.php");
    if (isset($_POST["submit"])){
        $uName = $_POST["username"];
        $password = $_POST["password"];
        $stmt = "DELETE FROM `userdetails` WHERE `username` = '$uName' AND `pass_word`='$password'";
        if (mysqli_query($link, $stmt)){
            header('Location: userInterface.php');
        }
        else{
            echo $error;
        }
      }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>DELETE ACCOUNT</title>
        <link rel="stylesheet" href="css/deleteAccount.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="topNavBar">
                <ul>
                    <li class="title"><a href="deleteAccount.php">FOODHUB</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="deleteAccountForm">
                <div class="delete">
                    <form style="max-width: 600px;" method="POST" style="margin:auto" action="">
                        <img src="images/human.png" alt="human" class="human">     
                        <h1 class="formHeading">DELETE ACCOUNT</h1>
                        <label for="username">Username:</label>
                        <input type="text" name="username"><br/><br/>
                        <label for="password" >Password:</label>
                        <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                        <input type="submit" class="submit" value="DELETE">
                    </form>
                </div> 
            </div>
        </div>
    </body>
</html>