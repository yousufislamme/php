<?php

$world = 'Earth';
$text = "we're living on";

// echo "{$text}{$world}";
$uperWorld = strtoupper($world);

printf("$text %s \n", $uperWorld);

$name = "Yousuf";
$dev = "Web Developer";
$wp = "WordPress";

printf("Hi my name is %s & I'm a %s on %s", $name, $dev, $wp);

$ser = 'Server';
$php = 'PHP';
$phpVersion = 8;
printf("this is my local %s for %s %u\n", $ser, $php, $phpVersion);

// new code
$n = 43951789;
$phoneBinary = 1951206669;
$u = -43951789;
$c = 65; // ASCII 65 is 'A'

printf("%%b = '%b'\n", $n); // binary representation
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function
printf("%%d = '%d'\n", $n); // standard integer representation
printf("%%e = '%e'\n", $n); // scientific notation
printf("%%u = '%u'\n", $n); // unsigned integer representation of a positive integer
printf("%%u = '%u'\n", $u); // unsigned integer representation of a negative integer
printf("%%f = '%f'\n", $n); // floating point representation
printf("%%o = '%o'\n", $n); // octal representation
printf("%%s = '%s'\n", $n); // string representation
printf("%%x = '%x'\n", $n); // hexadecimal representation (lower-case)
printf("%%X = '%X'\n", $n); // hexadecimal representation (upper-case)

printf("%%+d = '%+d'\n", $n); // sign specifier on a positive integer
printf("%%+d = '%+d'\n", $u); // sign specifier on a negative integer
