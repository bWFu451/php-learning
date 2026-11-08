<?php
function join_words($a, $b) {
    return $a . " и " . $b;
}

echo join_words("чай", "кофе");