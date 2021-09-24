<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 24.09.21
 * Time: 11:55
 */

function readF($path)
{
    $fd = fopen($path, 'r') or die("не удалось открыть файл");
    while (!feof($fd)) {
        $str = fgets($fd);
        echo $str . "<br />";
        echo htmlentities($str);
    }
    fclose($fd);
}

readF("test.txt");
