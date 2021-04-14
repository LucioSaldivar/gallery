<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "manuel";
$db['db_pass'] = "Ls156491;";
$db['db_name'] = "gallery";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}