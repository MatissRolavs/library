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
                <input  class="edit-input" name="title"/>
            </label>
            <label>
                Author:
                <input class="edit-input" name="author"/>
            </label>
            <label>
                Published date:
                <input class="edit-input"name="published"/>
            </label>
            <label>
                Available:
                <input class="edit-input"name="available"/>
            </label>
            <button class="book-edit-button">Save</button>
        </form>
    </div>
</article>
<?php
    require "components/footer.php";
?>