<?php
function parity($number)
{
    if ($number % 2) {
        return  "odd";
    } else {
        return "even";
    }
}
for ($i = 1; $i <= 10; $i++) {
    echo  parity($i) . "<br>"; // функция parity в цикле
}
