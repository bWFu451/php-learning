<form method="post">
    <input type="text" name="number">
    <button type="submit">Analysis</button>
</form>

<?php
if (isset($_POST["number"])) {
    is_numeric(true);
    $name = $_POST["number"];
}
function parity($tally)
{
    if ($tally % 2) {
        return "odd " . $tally . "<br>";
    } else {
        return "even " . $tally . "<br>";
    }
}
echo parity($name);
?>