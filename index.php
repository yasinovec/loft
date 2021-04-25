<?php

//DZ#0

const TEST_CONSTANTA = 'asd';

$user_name = 'Igor';
require_once 'function.php';
if (1 == 1) {
    echo 'hi';
}

//DZ#1

$name = 'Валентин';
$age = '35';
echo '"Меня зовут: '.$name.'"<br>';
echo 'Мне '.$age.' лет<br>';
echo '“!|/’”\\';

//DZ#1.1

const DRAWS = 80;
const MARKER = 23;
const PENCIL = 40;
const PAINT = DRAWS - (MARKER + PENCIL);

echo PAINT.'<br>';

//DZ#1.2

$age = '';
$age = random_int(1, 99);
echo $age.'<br>';
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age <= 17 && $age >= 1) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
echo '<br>';

//DZ#1.4

$day = '';
$day = random_int(1, 20);
echo $day.'<br>';

switch ($day) {
    case ($day <= 5 && $day >= 1):
        echo "Это рабочий день";
        break;
    case ($day == 6 || $day == 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo '<br>';

//DZ#1.5

$bmw = ['model', 'speed', 'doors', 'year'];
$bmwValues = ['X5', 120, 5, '2015'];
$bmwComb=array_combine($bmw, $bmwValues);
$toyota = ['model', 'speed', 'doors', 'year'];
$toyotaValues = ['X6', 130, 6, '2016'];
$toyotaComb=array_combine($toyota, $toyotaValues);
$opel = ['model', 'speed', 'doors', 'year'];
$opelValues = ['X7', 140, 7, '2017'];
$opelComb=array_combine($opel, $opelValues);
$cars = ['bmw' => $bmwComb, 'toyota' => $toyotaComb, 'opel' => $opelComb];
foreach ($cars as $marka => $value) {
    echo 'CAR: '.$marka.'<br>';
    foreach ($value as $title => $values) {
        echo $title.': ';
        echo $values.'| ';
    }
    echo '<br><br>';
}
