<?php
$string = file_get_contents("stats.json");
if ($string === false) {
    // deal with error...
}

$json_a = json_decode($string, true);
if ($json_a === null) {
    // deal with error...
}

foreach ($json_a as $person_name => $person_a) {
    echo $person_a['status'];
}