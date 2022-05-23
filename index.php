<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="assets/img/logo_1.png">
        <link rel="text/css" href="/campus-space-v2/index.css">
    </head>
    
    <body>
        <form method="POST" action="home.php">
            <div class="imgcontainer">
                <img src="assets/img/logo.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="1234" required>
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </body>
</html>