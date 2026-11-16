<?php
function FzBz($i)
{
    if ($i % 3 == 0 && $i % 5 == 0) {
        return "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        return "Fizz<br>";
    } elseif ($i % 5 == 0) {
        return "Buzz<br>";
    } else {
        return $i . "<br>";
    }
}
for ($i = 1; $i <= 30; $i++) {
    echo FzBz($i);
}
?>