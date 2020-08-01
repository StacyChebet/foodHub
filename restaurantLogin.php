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
                    <li class="title"><a href="restaurantLogin.php">FOODHUB</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <!-- <div class="formWrapper"> -->
                <div class="loginForm">
                    <div class="login">
                        <form style="max-width: 600px;" method="POST" style="margin:auto" action="processLogin.php">
                            <img src="images/human.png" alt="human" class="human">     
                            <h1 class="formHeading">LOGIN</h1>
                            <label for="username">Username:</label>
                            <input type="text" name="username"><br/><br/>
                            <label for="password" >Password:</label>
                            <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                            <input type="submit" name="submit" value="LOGIN">
                            <p>Don't have an account?<a href="restaurantSignUp.php" class="signup"> Sign up</a></p>
                            <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px; font-weight: bolder"><?php echo $error; ?></div>
                            </div> -->
                        </form>
                    </div> 
                </div>
            <!-- </div> -->
        </div>
    </body>
</html>