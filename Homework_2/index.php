<?php

require('src/functions.php');

echo '<h3>Задание 1 </h3>';
echo 'Вывод текста, разбитого на отдельные строки/параграфы, а затем в виде объединенной строки';
echo task1(['Lorem', 'ipsum', 'dolor', 'sit', 'amet'], true);
echo '<br><br><br>';


echo '<h3>Задание 2 </h3>';

echo '<p>', task2('+', 40, 1, 31.5, 2, 7.3), '</p>';
echo '<p>', task2('-', 40, 1, 31.5, 2, 7.3), '</p>';
echo '<p>', task2('*', 40, 1, 31.5, 2, 7.3), '</p>';
echo '<p>', task2('/', 100, 5, 3, 2), '</p>';
echo '<p>', task2('%', 30, 7, 13.5), '</p>';
echo '<p>', task2('**', 2, 4, 1, 2), '</p>';


echo '<h3>Задание 3 </h3>';

echo "Cтроим таблицу умножения" . '<br>';
task3(8, 8);
echo '<br>';


echo '<h3>Задание 4 </h3>';

task4();
echo '<br><br>';


echo '<h3>Задание 5 </h3>';

task5();
echo '<br><br>';


echo '<h3>Задание 6 </h3>';

$file = 'test.txt';
task6($file);

