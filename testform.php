<?php


// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// request -> works with both get and post 

$cookie_name = "gola";
$cookie_value = "randomStuff";
setcookie($cookie_name, $cookie_value, time() + 60, "/");
