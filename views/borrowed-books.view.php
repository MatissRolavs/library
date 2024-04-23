<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<div class="page-title">
    <h1>Borrowed Books</h1>
</div>
<article class="book-article">
    <?php
    foreach ($books as $book){ ?>
        <div class="card" id=<?= $book["id"] ?>>
            <div class="card-text">
                <h2>Title:<?= $book["name"]?></h2>
            </div>
            <div class="card-text">
                <?php foreach($authors as $author){?>
                <?php if ($book["author_id"] == $author["id"]){ ?><p>Author: <?= $author["name"]; } ?> </p>
                <?php } ?>
            </div>
            <p>Published:<?= $book["published"]?></p>
            <form method="POST" action="/return">
                <button name="id" value="<?= $book["id"] ?>">Return</button>
            </form>
        </div>
    <?php } ?>
</article>
<?php
    require "components/footer.php";
?>