<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<article>
    <div class="edit-box">
        <div class="bookhub-box">
            <h1>Add new author</h1>
        </div>
        <form method="POST">
            <label>
                Author:
                <input class="edit-input" name="author" value="<?= $_POST["author"] ?? "" ?>" placeholder="<?php if (isset($errors["author"])){?><?= $errors["author"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <button class="book-edit-button">Save</button>
        </form>
        <a href="/create-book" style="color:#ffa31a">Add book with existing author</a>
    </div>
</article>
<?php
    require "components/footer.php";
?>