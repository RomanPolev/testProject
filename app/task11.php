<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 24.09.21
 * Time: 11:17
 */

$str = "Карл у Клары украл Кораллы";
echo str_replace("К", "", $str) . "<br />";
$str2 = "Две бутылки лимонада";
echo str_replace("Две", "Три", $str2) . "<br />";
echo substr_replace($str2, "Четыре", 1) . "<br />"; // UTF-8 кодируется 2 байтами ?
echo count_chars("Д") . "<br />";
echo $str2;