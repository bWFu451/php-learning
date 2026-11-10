<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["username"]);
    echo "<h3>Спасибо, $name! Ваши данные получены.</h3>";
}
?>

<form method="POST" action="">
    <label>Ваше имя:</label>
    <input type="text" name="username" required>
    <button type="submit">Отправить</button>
</form>
