<form action="add.php" method="post">
    <input type="text" name="title" value="" placeholder="Title"> <br>
    <textarea name="description" rows="8" cols="40" placeholder="description"></textarea> <br>
    <input type="text" name="price" value="" placeholder="price"> <br>
    <select name="category">
        <?php foreach ($categories as $category) {
            echo "<option value=".$category['id'].">"
            .$category['title']."</option>";
        } ?>
    </select> <br><br>
    <button type="submit">Отправить</button>
</form>
