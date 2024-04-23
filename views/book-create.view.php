<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<article>
    <div class="edit-box">
        <div class="bookhub-box">
            <h1>Add more books</h1>
        </div>
        <form method="POST">
            <label>
                Title:
                <input value="<?= $_POST["title"] ?? "" ?>" class="edit-input" name="title" placeholder="<?php if (isset($errors["title"])){?><?= $errors["title"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Author:
                <input class="edit-input" name="author" value="<?= $_POST["author"] ?? "" ?>" placeholder="<?php if (isset($errors["author"])){?><?= $errors["author"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Published date:
                <input type="date"class="edit-input"name="published" value="<?= $_POST["published"] ?? "" ?>"/>
            </label>
            <label>
                Available:
                <input class="edit-input"name="available" placeholder="<?php if (isset($errors["available"])){?><?= $errors["available"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <button class="book-edit-button">Save</button>
        </form>
    </div>
</article>
<?php
    require "components/footer.php";
?>