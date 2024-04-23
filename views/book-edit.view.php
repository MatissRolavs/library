<?php 
    require "views/components/head.php";
?>
<?php
    require "views/components/navbar.php";
?>
<article>
    <div class="edit-box">
        <div class="bookhub-box">
            <h1>Edit <?= $book["title"]?></h1>
        </div>
        <form method="POST"> 
            <label>
                Title:
                <input class="edit-input" name="title" value="<?= $_POST["title"] ?? $book['title'] ?>" placeholder="<?php if (isset($errors["title"])){?><?= $errors["title"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Author:
                <input class="edit-input" name="author" value="<?= $_POST["author"] ?? $book["author"] ?>" placeholder="<?php if (isset($errors["author"])){?><?= $errors["author"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Published:
                <input type="date" class="edit-input" name="published" value="<?= $_POST["published"] ?? $book["published"] ?>"/>
            </label>
            <label>
                Available:
                <input class="edit-input" name="available" value="<?= $_POST["available"] ?? $book["available"] ?>"placeholder="<?php if (isset($errors["available"])){?><?= $errors["available"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <input type="hidden" name="id" value="<?= $book["id"]?>"/>
            <button class="book-edit-button">Save</button>
        </form>
    </div>
</article>

<?php
    require "views/components/footer.php";
?>