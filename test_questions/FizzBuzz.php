<?php
for ($i= 1; $i <= 10; $i++) {
    if ($i % 3 and $i % 5) {
        echo ("$i FizzBuzz") . "<br>";
    } else {
        if ($i % 3) {
            echo ("$i Fizz") . "<br>";
        } else {
            if ($i % 5) {
                echo ("$i Buzz") . "<br>";
            }
        }
    }
}
