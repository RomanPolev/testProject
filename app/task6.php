<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 19.09.21
 * Time: 18:34
 */

$rows = 10;
$cols = 10;

echo "<table  border='1' >";

for ($tr = 1; $tr <= $rows; $tr ++) {

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

echo "</table>";
