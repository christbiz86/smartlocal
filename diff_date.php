<?php

$startDate = "20th January 2019";
$endDate = "31st March 2021";

$start = new DateTime($startDate);
$end = new DateTime($endDate);
$diff = date_diff($start,$end);
echo "Different days : ".($diff->format('%a'))." days";