<?php
require_once("connect.php");

if (isset($_POST["submit"])){
    
    $fName=$_POST["firstName"];
    $lName=$_POST["lastName"];
    $eAddress=$_POST["email"];
    $date=$_POST["dob"];
    $uName=$_POST["username"];
    $pass=$_POST["password"];

    
    $sqlInsert = "INSERT INTO `userdetails`(`first_name`, `last_name`, `email_address`, `date_of_birth`, `userName`, `pass_word`) VALUES ('$fName','$lName','$eAddress','$date','$uName','$pass')";
    if (mysqli_query($link,$sqlInsert)){
        echo "Success"; 
    }
    else{
        echo "Error".mysqli_error($link);
    }
    $sqlDelete = "";
}

?>
   
    