<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 16.09.21
 * Time: 20:04
 */
$age = 2;

if ($age >= 1 and $age <= 17) {
    echo "Вам ещё рано работать<br />";
} elseif ($age >= 18 and $age <= 65) {
    echo "Вам ещё работать и работать <br />";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br />";
} else {
    echo "Неизвестный возраст<br />";
}
