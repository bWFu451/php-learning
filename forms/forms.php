<form method="post">
    <input type="text" name="number">
    <button type="submit">Analysis</button>
</form>

<?php
if (isset($_POST["number"])) {
    $name = $_POST["number"];
    if (is_numeric($name)) {
        echo "number<br>";
    } else {
        echo "alarm!<br>";
    }
}
function parity($tally)
{
    if ($tally % 2) {
        return "odd " . htmlspecialchars($tally) . "<br>";
    } else {
        return "even " . htmlspecialchars($tally) . "<br>";
    }
}
echo parity($name);
?>