<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/signUp.css" type="text/css">
    </head>
    <body>
        <div class="bgImage">
            <div class="container">
                <div id="topNavBar">
                    <ul>
                        <li class="title"><a href="signUp.php">FOODHUB</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="registrationForm">
                    <div class="register">
                        <form style="max-width: 600px;" method="POST" style="margin:auto" action="process_register.php">
                            <h1 class="formHeading">SIGN UP</h1>
                            <label for="firstName" >First Name:</label>
                            <input type="text" name="firstName"><br/><br/>
                            <label for="lastName" >Last Name:</label>
                            <input type="text" name="lastName"><br/><br/>
                            <label for="email" placeholder="example@email.com">Email:</label>
                            <input type="email" name="email"><br/><br/>
                            <label for="dob" >Date of Birth:</label>
                            <input type="date" name="dob"><br/><br/>
                            <label for="username">Username:</label>
                            <input type="text" name="username"><br/><br/>
                            <label for="password" >Password:</label>
                            <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                            <!-- <label for="confirmPassword" >Confirm Password:</label>
                            <input type="password" id="confirmPassword" minlength="4" maxlength="12"><br/><br/> -->
                            <input type="submit" name="submit" value="SIGN UP">
                            <p>Already have an account? <a href="login.php" class="signup">Login</a></p>
                        </form>
                    </div>   
                </div>
            </div>

        </div>
    </body>
</html>