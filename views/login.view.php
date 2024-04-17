<?php require "components/head.php";?>


<article>
    <div class="login-box">
        <div class="bookhub-box">
            <h1 class="book">Book</h1><h1 class="hub">Hub</h1>
        </div>
        <form method="POST"> 
            <input class="login-input" name="username" placeholder="Username"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <?php if (isset($errors["user"])){?>
                <p class="error"><?= $errors["user"] ?></p> 
            <?php } ?>
            <button class="login-button">Login</button>
        </form>
        <a href="/register" style="color:#ffa31a">Create Account</a>
    </div>
</article>
<?php
    require "components/footer.php";
?>