<?php

$base_url = "http://localhost/MVC/";
$base_dir = "/MVC/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);
