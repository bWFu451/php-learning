<form method="post">
    <input type="text" name="number">
    <button type="submit">Analysis</button>
</form>

<?php
if (isset($_POST["number"])) {
    $name = $_POST["number"];
    if (filter_var($name, FILTER_VALIDATE_INT) !== false) {
        echo parity($name) . "<br>";
    } else {
        echo "alarm!<br>";
    }
}
function parity($tally)
{
    if ($tally % 2) {
        return "odd " . htmlspecialchars($tally);
    } else {
        return "even " . htmlspecialchars($tally);
    }
}
?>