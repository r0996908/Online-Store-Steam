<?php
if(!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $options = [
    'cost' => 14,
];
    $password = password_hash($password, PASSWORD_BCRYPT, $options);

    $conn = new PDO('mysql:host=localhost;dbname=claysme', "root", "");
    $statement = $conn->prepare('INSERT INTO user (email, password, is_admin) VALUE :email, :password, FALSE)');
    $statement->bindValue(":email", $email);
    $statement->bindValue(":password", $password);
    $statement->execute();

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <head>
        <div>
            <form action="" method="post">
                <h2>Signup</h2>

                <div class= "fillbox">
                    <label for="email">E-mail</label>
                    <input type="email" name="email"> 
                </div>

                <div class= "fillbox">
                    <label for="password">password</label>
                    <input type="password" name="password">
                </div>

                <div class= "fillbox">
                    <input type="submit" value="SignUp">
                </div>

                <div>
                    <a href="login.php">Already have an account? Log In here</a>
                </div>
            </form>
        </div>
    </head>
</body>
</html>
