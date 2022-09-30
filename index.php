<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="auth">
        
        <div class="signup">
            <h4>SIGN IN</h4>
            <p>Don't have an account yet ?</p>
            <form action="models/User.php" method="POST">
                <input type="text" name="name" placeholder="name">
                <input type="password" name="pass" placeholder="password">
                <input type="password" name="passrepeat" placeholder="repeat password">
                <input type="text" name="mail" placeholder="mail">
                <br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>

        <div class="login">
            <h4>LOGIN</h4>
            <p>Already have an account ?</p>
            <form action="models/User.php" method="POST">
                <input type="text" name="name" placeholder="name">
                <input type="password" name="pass" placeholder="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>

    </section>

    <?php
    // require_once "models/Database.php";
    // $a = new Database();
    // $a->getPdo();
    require_once "models/User.php";
    $a = new User();
    $a->storeUser();
    ?>
</body>
</html>