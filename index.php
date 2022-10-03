<?php
    include('controllers/UserController.php');
?>

    <section class="auth">
        
        <div class="signup">
            <h4>SIGN IN</h4>
            <p>Don't have an account yet ?</p>
            <form action="controllers/UserController.php" method="POST">
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
