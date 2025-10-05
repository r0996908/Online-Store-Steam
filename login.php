<?php 
function CorrectLogin($p_email, $p_wachtwoord) {
    if ($p_email === "salma@steam.com" && $p_wachtwoord === "12345isnotsecure") {
        return true;
    } else {
        return false;
    }
}

if (!empty($_POST)) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if (CorrectLogin($Email, $Password)) {
        $Cookiesign = $Email;
        setcookie("LoggedIn", $Cookiesign, time()+60*60*24*30);
        header('Location: index.php');
    } else; 
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
            <form action="" method="post">
                <h2>Login</h2>

                <div class= "fillbox">
                    <label for="Email">E-mail</label>
                    <input type="email" name="Email"> 
                </div>

                <div class= "fillbox">
                    <label for="Password">Wachtwoord</label>
                    <input type="password" name="Password">
                </div>

                <div class= "fillbox">
                    <input type="submit" value="Log In">
                </div>
            </form>
        </div>
    </head>
</body>
</html>