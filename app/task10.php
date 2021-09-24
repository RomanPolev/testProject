<?php
/**
 * Created by PhpStorm.
 * User: z-player
 * Date: 24.09.21
 * Time: 9:58
 */

echo "Now:\t" . date("d.m.Y H:i") . "<br />";
echo "Unix timestamp for 24.02.2016 00:00:00 is\t" . strtotime("24.02.2016 00:00:00") . " sec<br />";
$d = DateTime::createFromFormat('d.m.Y H:i:s', '24.02.2016 00:00:00', new DateTimeZone('UTC'));
echo $d->getTimestamp();
