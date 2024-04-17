<?php require "components/head.php";?>


<article>
    <div class="login-box">
        <div class="bookhub-box">
            <h1 class="book">Book</h1><h1 class="hub">Hub</h1>
        </div>
        <form method="POST"> 
            <input class="login-input" name="username" placeholder="<?php if (isset($errors["username"])){?><?= $errors["username"] ?><?php } else { ?>Username <?php } ?>"/>
            <input type="password" class="login-input" name="password" placeholder="<?php if (isset($errors["password"])){?><?= $errors["password"] ?><?php } else { ?>Password <?php } ?>"/>
            <button class="login-button">Register</button>
        </form>
        <a href="/login" style="color:#ffa31a">Login</a>
    </div>
</article>
<?php
    require "components/footer.php";
?>
