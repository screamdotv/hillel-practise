<?php
require_once 'Date.php';

$date = new Date(day:1, month:11, year:2023);

echo $date->comparison();
echo $date->difference();