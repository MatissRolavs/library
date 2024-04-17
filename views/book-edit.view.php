<?php 
    require "views/components/head.php";
?>
<?php
    require "views/components/navbar.php";
?>
<div class="page-title">
    <h1>Edit <?= $book["title"]?></h1>
</div>

<form method="POST"> 
    <label>
        Title:
        <input name="title" value="<?= $_POST["title"] ?? $book['title'] ?>"/>
    </label>
    <label>
        Author:
        <input name="author" value="<?= $_POST["author"] ?? $book["author"] ?>"/>
    </label>
    <label>
        Published:
        <input name="published" value="<?= $_POST["published"] ?? $book["published"] ?>"/>
    </label>
    <label>
        Available:
        <input name="available" value="<?= $_POST["available"] ?? $book["available"] ?>"/>
    </label>
    <input type="hidden" name="id" value="<?= $book["id"]?>"/>
    <button>Save</button>
</form>


<?php
    require "views/components/footer.php";
?>