<?php
    $error = "Invalid username/password";
    require_once("connect.php");
    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $stmt = "SELECT `username`, `password` FROM `restaurantdetails` WHERE `username` = '$username' AND `password`='$password'";
        $result = mysqli_query($link, $stmt) or die( mysqli_error($link));
        $row = mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
            setcookie('username', $username);
            session_start();
            // $_SESSION["username"] = htmlentities($_POST["first_name"]);
            header('Location: restaurantInterface.php');
        }
        else{
            header('Location: restaurantLogin.php');
            $error = "You have entered an incorrect username/password";
            $link ->close();
            
        }

      }

?>