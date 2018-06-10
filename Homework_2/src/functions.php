<?php

function task1($arrayString, $boolean = false)
{
    foreach ($arrayString as $item) {
        echo '<p>' . $item . '</p>';
    }
    if ($boolean) {
        return implode(' ', $arrayString);
    }
}


function task2(string $operator)
{
    for ($i = 0; $i < func_num_args(); $i++) {
        $param = func_get_arg($i);
        $type = gettype($param);
        if ($i === 0) {
            if ($type !== 'string')
                return 'Не указан оператор для вычислений';
        } else {
            if ($type === 'integer' || $type === 'double') {
                $array[] = $param;
            }
        }
    }
    if (empty($array)) {
        return 'В функцию не переданы числа для вычислений';
    } elseif (count($array) === 1) {
        return $array[0];
    }
    $result = array_shift($array);
    foreach ($array as $value) {
        switch ($operator) {
            case '+':
                $result += $value;
                break;
            case '-':
                $result -= $value;
                break;
            case '/':
                $result /= $value;
                break;
            case '*':
                $result *= $value;
                break;
            case '%':
                $result %= $value;
                break;
            case '**':
                $result = $result ** $value;
                break;
            default:
                return 'Не корректно указан оператор для вычислений';
        }
    }
    return $result;
}


function task3(int $rows, int $cols)
{
    if (gettype($rows) !== 'integer' || gettype($cols) !== 'integer' || $rows < 1 || $cols < 1) {
        echo 'Некорректно указаны размеры таблицы умножения';
        return;
    } else {
        echo "<table class='table'>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr style='height: 25px'>";
            for ($j = 1; $j <= $cols; $j++) {
                $item = $i * $j;
                echo "<td style='width: 25px; text-align: center'>", $item, "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}


function task4()
{
    echo 'Текущая дата и время: ' . date('d.m.y H:i') . '<br>';
    echo 'Вывод unixtime времени для даты 24.02.2016 00:00:00 : ' . strtotime('24.02.2016 00:00:00');
}


function task5()
{
    $str1 = 'Карл у Клары украл Кораллы';
    echo 'Дано: ' . $str1 . '<br>';
    echo 'Результат: ' . mb_ereg_replace('К', 'к', $str1) . '<br>' . '<br>';
    $str2 = 'Две бутылки лимонада';
    echo 'Дано: ' . $str2 . '<br>';
    echo 'Результат: ' . mb_ereg_replace('Две', 'Три', $str2);
}


function task6($filename)
{
    $file = fopen($filename, 'w');
    fwrite($file, 'Hello again!');
    fclose($file);

    echo '<p>Файл "test.txt" успешно записан</p>';

    $file = fopen($filename, 'r');
    readfile($filename);
    fclose($file);
}
