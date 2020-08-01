<?php
    require_once("connect.php");
    $stmt = "SELECT * FROM `userdetails` where userID=1";
    $result = mysqli_query($link, $stmt) or die( mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $fname = $row['first_name'];
    $lname = $row['last_name'];
    $email = $row['email_address'];
    $dob = $row['date_of_birth'];
    $uname = $row['userName'];
    $pass = $row['pass_word'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EDIT PROFILE</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/editProfile.css">
    </head>
    <body>
        <div class="container">
            <div class="profileDetails">
                <h1>USER PROFILE</h1>
                <div class="fname">
                    <p>First name: <?php echo $fname; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div class="lname">
                    <p>Last name: <?php echo $lname; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div class="dob">
                    <p>Date of Birth: <?php echo $dob; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div class="email">
                    <p>Email Address: <?php echo $email; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div class="username">
                    <p>Username: <?php echo $uname; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div class="password">
                    <p>Password: <?php echo $pass; ?></p>
                    <button type="button" class="edit">edit</button>
                </div>
                <div>
                    <button type="button" class="done">DONE</button>
                </div>
            </div>
        </div>
    </body>
</html>
