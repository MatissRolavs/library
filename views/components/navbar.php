<header>
    <div class="bookhub-box">
    <h1 class="book">Book</h1><h1 class="hub">Hub</h1>
    </div>
    <nav>
        <a href="/">Book List</a>
        <?php if($_SESSION["user"] == true && $_SESSION["admin"] == 1){ ?>
        <a href="create-book">Add More Books</a>
        <a href="author-create">Add New Author</a>
        <?php } ?>
    <?php if($_SESSION["user"] == true) { ?>
        <a href="borrowed-books">Borrowed Books</a>
    <?php } ?>
    </nav>
</header>
