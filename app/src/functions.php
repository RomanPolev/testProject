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

