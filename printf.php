<?php
$a = "Yousuf";
$b = "Muhammad";

printf('I have two friends 1st %2$s 2nd %1$s', $a, $b);
echo "\n";

$n = 45.13666;
printf("My PHP point is %.2f", $n);
echo "\n";

// use sprintf

$output = sprintf('Hello! My name is %2$s %1$s...', $a, $b);

echo $output;
