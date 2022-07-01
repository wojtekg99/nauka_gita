$array = array(1, 7, 9, 3, 20, 12, 2, 9);
$average = array_sum($array) / count($array);
echo $average;

<?php
$data = array(
    35 => 1000,
    15 => 2000,
    30 => 100,
    10 => 90,
    5 => 100,
    5 => 3120
);

$dividend = 0;
$divisor = 0;

foreach($data as $percent => $value){
    $dividend += ($percent * $value);
    $divisor += $percent;
}

$average = $dividend / $divisor;

echo $average;


