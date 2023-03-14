<?php

$condition1 = true;
$condition2 = false;
$condition3 = true;

if ($condition1 && $condition2 && $condition3) {
    echo "condition 1 Hello Bangladesh";
} elseif ($condition1 && $condition2) {
    echo "condition 2 ";
} elseif ($condition2 && $condition3) {
    echo "condition 3 ";
} elseif ($condition1 && $condition3) {
    echo "condition 4";
}
