<?php 
function CorrectLogin($p_email, $p_wachtwoord) {
    if ($p_email === "salma@steam.com" && $p_wachtwoord === "12345isnotsecure") {
        print "nee!!";
    } else {
        return false;
    }
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <head>
        <div>
            <form action="" method="$_POST">
                <h2>Login</h2>

                <div class= "fillbox">
                    <label for="Email">E-mail</label>
                    <input type="email" name="Email" id=""> 
                </div>

                <div class= "fillbox">
                    <label for="Password">Wachtwoord</label>
                    <input type="password" name="Password" id="">
                </div>

                <div class= "fillbox">
                    <input type="submit" value="Log In">
                </div>
            </form>
        </div>
    </head>
</body>
</html>