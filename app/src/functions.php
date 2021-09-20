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

