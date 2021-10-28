<?php

$script_name = $_SERVER['SCRIPT_NAME'];
$script_name_arr = explode(' / ', $script_name);
$mypage = $script_name_arr[count($script_name_arr) - 1];

if ($mypage == '/page-name.php') {
    $meta_title = "Your Cart";
}
?>

