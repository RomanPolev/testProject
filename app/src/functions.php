<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 20.09.21
 * Time: 19:53
 */

function task1($stringArr, $flag = false)
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
    switch (args[0]) {
        case '+':
            break;
        case '-':
            break;
        case '/':
            break;
        case '*':
            break;
        default:
            echo "Unknown operation type";
            break;
    }
    echo "It's ok.";
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

function task3($rows = 3, $cols = 3)
{

    echo "<table  border='1' >";

    for ($tr = 1; $tr <= $rows; $tr++) {

        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++) {
            $res = $tr * $td;

            if ($tr % 2 == 0 && $td % 2 == 0) {
                $res = "(" . $res . ")";
            } elseif ($tr % 2 == 1 && $td % 2 == 1) {
                $res = "[" . $res . "]";
            }

            echo "<td width = '50' align = 'center' height = '40'>$res</td>";

        }

        echo "</tr>";
    }
}
