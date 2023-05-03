<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="../style/style.css" type="text/css">
</head>
<body>
    <img src="../images/lexiLogo.png" alt="lexi logo" class="logo">
    <section id="section-login">
        <form action="" type="POST">
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br><br>
            <a href="forgetPassword.php">Forgot password?</a><br><br>
            <button type="submit" class="purpleBtn"><a href="./home.php">Log in</a></button><br>
        </form>
    </section>
    <section class="littleText">
        <p>Don't have an account yet? <a href="./signUp.php">Create an account</a></p>
    </section>
</body>
</html>