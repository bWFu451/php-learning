<?php
require __DIR__ . "/connect.php";
?>
<form method="post">
    <input type="text" name="info">
    <button type="submit">enter</button>
</form>
<?php
if (isset($_POST["info"])) {
    $title = trim($_POST["info"]);

    if ($title !== "") {
        $stmt = $pdo->prepare("INSERT INTO notes (body) VALUES (?)");
        $stmt->execute([$title]);
        echo "Saved";
    } else {
        echo "Empty field";
    }
}