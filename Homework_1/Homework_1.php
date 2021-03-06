<?php

echo '<b>' . 'Task #1' . '</b><br><br>';

$name = 'Ольга';
$age = '27';
echo "Меня зовут: $name" . '<br>';
echo "Мне $age лет" . '<br>';
echo '"!|\/\'"\\' . '<br><br><br>';


echo '<b>' . 'Task #2' . '</b><br><br>';

const DRAWINGS = 80;
const FELTPENS = 23;
const PENSILS = 40;
const PAINTS = DRAWINGS - FELTPENS - PENSILS;
echo "Условие задачи: на школьной выставке " . DRAWINGS . " рисунков, " .
    FELTPENS . " из них выполнены фломастерами, " . PENSILS . " карандашами, а остальные — красками. 
Сколько рисунков выполнены красками?" . '<br>';
echo "Ответ: красками нарисованы " . PAINTS . " рисунков.";
echo '<br><br><br>';


echo '<b>' . 'Task #3' . '</b><br><br>';

$age = rand(-20, 100);
echo "Ваш возраст: $age." . '<br>';
if (18 <= $age && $age <= 65) {
    echo 'Вам еще работать и работать.';
} elseif (1 <= $age && $age <= 17) {
    echo 'Вам   ещё   рано   работать.';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию.';
} else {
    echo 'Неизвестный возраст.';
}
echo '<br><br><br>';


echo '<b>' . 'Task #4' . '</b><br><br>';

$day = rand(1, 10);
echo "День № $day" . '<br>';
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это   рабочий   день.';
        break;
    case 6:
    case 7:
        echo 'Это   выходной   день.';
        break;
    default:
        echo 'Неизвестный день.';
}
echo '<br><br><br>';


echo '<b>' . 'Task #5' . '</b><br><br>';

$bmw = ['model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015];
$toyota = ['model' => 'Supra',
    'speed' => 140,
    'doors' => 4,
    'year' => 2012];
$opel = ['model' => 'Vectra',
    'speed' => 100,
    'doors' => 5,
    'year' => 2003];
$cars = ['bmv' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel];
foreach ($cars as $key => $value) {
    echo "Car $key<br>";
    echo "{$value["model"]} {$value["speed"]} {$value["doors"]} {$value["year"]}<br><br><br>";
}


echo '<b>' . 'Task #6' . '</b><br><br>';

echo "<table style='border: 1px solid black'>";
$cols = 10;
$rows = 10;
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr style='height: 25px'>";
    $rowCheck = $i % 2;
    for ($j = 1; $j <= $cols; $j++) {
        $columnCheck = $j % 2;
        $number = $i * $j;
        if ($rowCheck !== 0 && $columnCheck !== 0) {
            $number = "<b> [$number] </b>";
        } elseif ($rowCheck === 0 && $columnCheck === 0) {
            $number = "<b> ($number) </b>";
        }
        echo "<td style='width: 25px; text-align: center'> $number </td>";
    }
    echo "</tr>";
}
echo "</table>";