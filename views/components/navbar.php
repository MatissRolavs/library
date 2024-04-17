<header>
    <div class="bookhub-box">
    <h1 class="book">Book</h1><h1 class="hub">Hub</h1>
    </div>
    <nav>
        <a href="/">Book List</a>
        <?php if($_SESSION["user"] == true && $_SESSION["username"] == "matiss"){ ?>
        <a href="create-book">Add More Books</a>
        <?php } ?>
    <?php if($_SESSION["user"] == true) { ?>
        <a href="borrowed-books">Borrowed Books</a>
    <?php } ?>
    <?php if($_SESSION["user"] == true) { ?>
        <a href="logout">Logout</a>
    <?php } ?>
    </nav>
</header>

<!-- <?php if($_SESSION["user"] == false) { ?>
        <a href="/login">Login</a>
        <a href="register">Register</a>
    <?php } ?> -->