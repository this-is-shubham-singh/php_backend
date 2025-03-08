<?php


print_r($_COOKIE);
echo $_COOKIE["gola"];

setcookie("genius", "", time() - 60, "/");
