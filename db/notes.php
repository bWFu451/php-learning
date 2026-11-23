<?php
require __DIR__ . "/connect.php";
$message = "";
if (isset($_POST["info"])) {
    $title = trim($_POST["info"]);

    if ($title !== "") {
        $stmt = $pdo->prepare("INSERT INTO notes (body) VALUES (?)");
        $stmt->execute([$title]);

        header("Location: notes.php");
        exit;
    } else {
        echo htmlspecialchars($message = "empty field");
    }
}
if (isset($_POST["remove_id"])) {
    $removeId = filter_var($_POST["remove_id"], FILTER_VALIDATE_INT);

    if ($removeId !== false) {
        $stmt = $pdo->prepare("DELETE FROM notes WHERE id = ?");
        $stmt->execute([$removeId]);

        header("Location: notes.php");
        exit;
    }
}
?>
<form method="post">
    <input type="text" name="info">
    <button type="submit">enter</button>
</form>
<?php
$stmt = $pdo->query("SELECT body, created_at, id FROM notes ORDER BY id DESC");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<div>";
    echo "<p>" . htmlspecialchars($row["body"]) . " (" . $row["created_at"] . ")</p>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='remove_id' value='" . $row["id"] . "'>";
    echo "<button type='submit'>стереть</button>";
    echo "</form></div>";
}
?>