<?php
function parity($number) {
            if ($number % 2) {
                return  "odd";
            } else {
                return "even";
            }    
        }
echo parity (4);
echo "<br>";
echo parity (7);
?>
