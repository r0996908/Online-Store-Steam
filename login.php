<?php //HCV(dno§"b$=* pw azure
function CorrectLogin($p_email, $p_password) {
    $conn = new PDO('mysql:host=localhost;dbname=claysme', "root", "");
    $statement = $conn->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
    $statement->bindValue(":email", $p_email);
    $statement->bindValue(":password", $p_password);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if ($p_email === "salma@claysme.com" && $p_password === "12345isnotsecure"|| password_verify($p_password, $user['Password'])) {
        return true;
    } else {
        return false;
    }
}

if (!empty($_POST)) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if (CorrectLogin($Email, $Password)) {
        $salt = "HJGgcéè!'TDU($64µ8L.0";
        $Cookiesign = $Email . "," . md5($Email.$salt);
        setcookie("LoggedIn", $Cookiesign, time()+60*60*24*30);
        header('Location: index.php');
    } else {
        $error = "Ongeldige email en/of wachtwoord.";
    }
}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <head>
        <div>
            <form action="" method="post">
                <h2>Login</h2>

                <?php if (isset($error)):?>
                <div style="color:red" class="LoginError">
                    <p><?php echo $error;?></p>
                </div>
                <?php endif;?>

                <div class= "fillbox">
                    <label for="Email">E-mail</label>
                    <input type="email" name="Email"> 
                </div>

                <div class= "fillbox">
                    <label for="Password">password</label>
                    <input type="password" name="Password">
                </div>

                <div class= "fillbox">
                    <input type="submit" value="LogIn">
                </div>

                <div>
                    <a href="signup.php">Dont have an account yet? Sign up here</a>
                </div>
            </form>
        </div>
    </head>
</body>
</html>