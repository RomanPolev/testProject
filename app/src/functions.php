<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 20.09.21
 * Time: 19:53
 * @param array $stringArr - массив строк, подоваемых на вход
 * @param bool $flag - флаг, контролирующий вид выхода
 * (true - для вывода одной строки, false - для вывода массива строк)
 * @return string
 */


function task1(array $stringArr, bool $flag = false)
{
    if ($flag) {
        $concat = implode(",", $stringArr);
        return $concat;
    }
    foreach ($stringArr as $value) {
        echo "<p>$value</p>";
    }
}

function task2(...$args)
{
    if (!isset($args[0]) || gettype($args[0]) != "string") {
        echo "Error, the first argument is missing, or it is a type other than a string.";
        return;
    }
    switch (array_shift($args)) {
        case '+':
            $out = array_shift($args);
            foreach ($args as $item) {
                $out += $item;
            }
            break;
        case '-':
            $out = array_shift($args);
            foreach ($args as $item) {
                $out -= $item;
            }
            break;
        case '/':
            $out = array_shift($args);
            foreach ($args as $item) {
                $out /= $item;
            }
            break;
        case '*':
            $out = array_shift($args);
            foreach ($args as $item) {
                $out *= $item;
            }
            break;
        default:
            echo "Unknown operation type";
            break;
    }
    echo $out;
}

function task2_1(...$args)
{
    $operators = ["+", "-", "/", "*"];
    $out = "";

    if (!isset($args[0]) || gettype($args[0]) != "string") {
        echo "Error, the first argument is missing, or it is a type other than a string.";
        return;
    }

    foreach ($operators as $value) {
        if ($args[0] == $value) {
            foreach ($args as $key => $item) {
                if ($key != 0) {
                    $out = $out . $item;
                    if ($key != count($args) - 1) {
                        $out = $out . $args[0];
                    }
                }
            }
        }
    }
    return eval("echo " . $out . ";");
}

function task3(int $rows = 3, int $cols = 3)
{
    if (gettype($rows) != "integer" && gettype($cols) != "integer") {
        echo "Error. One or both of argument types different than integer!";
        return 1;
    }

    if ($rows <= 0 || $cols <= 0) {
        echo "Error. One or both arguments less than 0!";
        return 2;
    }

    echo "<table  border='1' >";

    for ($tr = 1; $tr <= $rows; $tr++) {

        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++) {
            $res = $tr * $td;

            echo "<td width = '50' align = 'center' height = '40'>$res</td>";

        }

        echo "</tr>";
    }

    echo "</table>";
}
