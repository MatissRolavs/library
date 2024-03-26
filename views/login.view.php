<?php require "components/head.php";?>
<?php require "components/navbar.php";?>

<form method="POST"> 
    <label>
        Username:
        <input name="username"/>
    </label>
    <label>
        Password:
        <input name="password"/>
    </label>
    <button>Login</button>
</form>

<?php
    require "components/footer.php";
?>