<?php

$name = 'Bangladesh';
$age = 23;
$aim = 'Rich man in the World!';
$newAim = 'aim';
define('data', 'Yousuf');

// new tricks
echo $$newAim . "\n";
echo "this is our {$name}\n";

echo "Hello I'm " . data;
