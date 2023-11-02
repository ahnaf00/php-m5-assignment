<?php

$fp = fopen("./data/users.txt", "r");

$roles          = [];
$emails         = [];
$firstnames     = [];
$lastnames      = [];
$ages           = [];
$passwords      = [];

while($lines = fgets($fp))
{
    $values = explode(",", $lines);
    // print_r($values);
    array_push($roles, trim($values[0]));
    array_push($emails, trim($values[1]));
    array_push($passwords, trim($values[2]));
    array_push($firstnames, trim($values[3]));
    array_push($lastnames, trim($values[4]));
    array_push($ages, trim($values[5]));
}
fclose($fp);