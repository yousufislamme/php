<?php

$students = array(
    "Rohim",
    "Korim",
    "Rakib",
    777,
    2.0,
    "okay",
);
// count all list...
$all = count($students);

for ($i = 0; $i < ($all); $i++) {
    echo $students[$i] . "\n";
}
