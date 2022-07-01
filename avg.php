$array = array(1, 7, 9, 3, 20, 12, 2, 9);
$average = array_sum($array) / count($array);
echo $average;

<?php
$data = array(
    35 => 1500,
    15 => 2500,
    30 => 150,
    10 => 95,
    5 => 150,
    5 => 3125
);

$dividend = 0;
$divisor = 0;

foreach($data as $percent => $value){
    $dividend += ($percent * $value);
    $divisor += $percent;
}

$average = $dividend / $divisor;

echo $average;


