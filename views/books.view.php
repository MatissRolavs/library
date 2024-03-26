<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
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
                <td class="delete-row">
                    <form method="POST" action="book-delete.php">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
            
<?php
    require "components/footer.php";
?>