<?php
// echo 'Hello World 111';

$time = date("H:i:s");

// echo $time;
// echo "\n";
// echo strtotime($time);

echo "\n";

$h = (int)date("H");



if ($h >= 6 && $h < 12) {
    echo "Good morning";
}

if ($h >= 12 && $h < 18) {
    echo "Good afternoon";
}

if ($h >= 18 || $h < 6) {
    echo "Good evening";
}

// echo date('Y-m-d', time()) . " 06:00:00";
// echo strtotime(date('Y-m-d', time()) . " 06:00:00");


# include "./index.html";
