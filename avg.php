$array = array(1, 7, 9, 3, 20, 12, 2, 9);
$average = array_sum($array) / count($array);
echo $average;

<?php
$data = array(
    35 => 1001,
    15 => 2001,
    30 => 101,
    10 => 91,
    5 => 101,
    5 => 3121
);

$dividend = 0;
$divisor = 0;

foreach($data as $percent => $value){
    $dividend += ($percent * $value);
    $divisor += $percent;
}

$average = $dividend / $divisor;

echo $average;


