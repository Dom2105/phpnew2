<?php

$arr = [
    "Max",
    "Jack",
    "Harry",
    "Benjamin"
];

/* for ($i=0; $i < count($arr); $i = $i + 2) { // $i++ (immer plus 1) $i-- (immer minus 1)
    echo $arr[$i].'<br>';
}
echo '<br><hr>';

foreach ($arr as $name) {
    echo $name.'<br>';
} */

$n = "Peter";

while ($n == "Peter") {
    echo $n;
    $n = "Hans";
    
}

do {
    echo $n;
} while ($n == "Peter");