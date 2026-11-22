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
?>
<form method="post">
    <input type="text" name="info">
    <button type="submit">enter</button>
</form>
<?php
if (isset($_GET["?"])) {
    echo htmlspecialchars($message = "?");
}
$stmt = $pdo->query("SELECT body, created_at FROM notes ORDER BY id DESC");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<p>" . htmlspecialchars($row["body"]) . " (" . $row["created_at"] . ")</p>";
}
