<?php
// here it full source is at functions.php
include_once "functions.php";
$value = 13;

if (isEven($value)) {
    echo "{$value} is a Even number";
} else {
    echo "{$value} is a Odd number";
}
