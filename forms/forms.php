<form method="post">
    <input type="text" name="username">
    <button type="submit">Отправить</button>
</form>

<?php
if (isset($_POST["username"])) {
    $name = $_POST["username"];
    echo "Привет, " . htmlspecialchars($name) . "!";
}
?>