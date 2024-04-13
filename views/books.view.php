<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<?php if($_SESSION["user"] == true ){ ?>
<p class="welcome">Welcome, <?= $_SESSION["username"] ?>!</p>
<?php } ?>
<h1>Book List</h1>

        <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Available</th>
            </tr>
            <?php foreach($books as $book){?>
            <tr>
                <td><?= $book["title"]?></td>
                <td><?= $book["author"]?></td>
                <td><?= $book["published"]?></td>
                <td><?= $book["available"]?></td>
                <?php if($_SESSION["user"] == true) { ?>
                <td class="delete-row"> <a class="edit-button" href="/borrow">Borrow</a></td>
                <?php } ?>
                <?php if($_SESSION["user"] == true && $_SESSION["username"] == "matiss"){ ?>
                <td class="delete-row">
                    <form method="POST" action="/delete">
                        <button name="id" value="<?= $book["id"] ?>">Delete</button>
                    </form>
                </td>
                <td class="delete-row">
                    <a href="/edit?id=<?= $book["id"] ?>"<?php $book["id"] ?>" class="edit-button">Edit</a>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
            
<?php
    require "components/footer.php";
?>