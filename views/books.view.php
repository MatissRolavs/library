<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<?php if($_SESSION["user"] == true ){ ?>
<p class="welcome">Welcome, <?= $_SESSION["username"] ?>!</p>
<?php } ?>
<form action="/logout" method="POST">
    <button>Logout</button>
</form>
<div class="page-title">
    <h1>Book List</h1>
</div>
<article class="book-article">

        <?php foreach($books as $book){?>
        <div class="card" id=<?= $book["id"] ?>>
            <div class="card-text">
                <h2>Title: <?= $book["title"]?></h2>
            </div>
            <div class="card-text">
                <p>Author: <?= $book["author"]?></p>
            </div>
                <p>Published: <?= $book["published"]?></p>
                <p>Available: <?= $book["available"]?></p>
                <?php if($_SESSION["user"] == true) { ?>
                    
                    <form method="POST" action="/borrow">
                        <button name="id" value="<?= $book["id"] ?>">Borrow</button>
                    </form>
                
                <?php } ?>
                <?php if($_SESSION["user"] == true && $_SESSION["username"] == "matiss"){ ?>
                
                    <form method="POST" action="/delete">
                        <button name="id" value="<?= $book["id"] ?>">Delete</button>
                    </form>
                
                
                    <a href="/edit?id=<?= $book["id"] ?>"<?php $book["id"] ?>" class="edit-button">Edit</a>
                
                <?php } ?>
        </div>
        <?php } ?>
        
</article>
<?php
    require "components/footer.php";
?>