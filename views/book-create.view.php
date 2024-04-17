<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<div class="page-title">
    <h1>Add more books</h1>
</div>
<form method="POST">
    <label>
        Title:
        <input name="title"/>
    </label>
    <label>
        Author:
        <input name="author"/>
    </label>
    <label>
        Published date:
        <input name="published"/>
    </label>
    <label>
        Available:
        <input name="available"/>
    </label>
    <button>Save</button>
</form>
<?php
    require "components/footer.php";
?>