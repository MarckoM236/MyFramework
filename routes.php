<?php 
$current_url = $_SERVER['PHP_SELF']; 
$base_url =  substr($current_url, 0, -10);

define('PATH_URL',$base_url);

//New routes
define('WELCOME_CREATE',PATH_URL . '/WelcomeController/create');