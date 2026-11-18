<form method="post">
    <input type="text" name="first">
    <input type="text" name="second">
    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST["first"]) && isset($_POST["second"])) {
    $value1 = $_POST["first"];
    $value2 = $_POST["second"];


    if (filter_var($value1, FILTER_VALIDATE_INT) !== false && filter_var($value2, FILTER_VALIDATE_INT) !== false) {
        echo $value1 . " " . compare($value1, $value2) . " " . $value2;
    }
}
function compare($i1, $i2)
{
    if ($i1 == $i2) {
        return "==";
    } elseif ($i1 > $i2) {
        return ">";
    } elseif ($i1 < $i2) {
        return "<";
    }
}
?>